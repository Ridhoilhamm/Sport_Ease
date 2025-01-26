<?php

namespace App\Livewire\Booking;

use App\Models\Lapangan;
use App\Models\transaksi;
use Carbon\Carbon;
use Livewire\Component;

class Booking extends Component
{

    public $lapangan, $date, $times, $lama_sewa;
    public $get_time = [];

    public function mount($lapangan)
    {
        $this->lapangan = $lapangan;

        $this->times = [
            "08:00-10:00",
            "10:00-12:00",
            "12:00-14:00",
            "14:00-16:00",
            "16:00-18:00",
            "18:00-20:00",
            "20:00-22:00",
            "22:00-24:00"
        ];
    }

    public function choiceTime($time)
    {
        // Jika waktu sudah dipilih, hapus
        if (in_array($time, $this->get_time)) {
            $this->get_time = array_diff($this->get_time, [$time]);
        } else {
            // Jika tidak dipilih, tambahkan
            $this->get_time = [$time]; // Hanya satu waktu yang dipilih
        }
    }

    public function submit()
    {
        $currentTime = Carbon::now();

        $this->validate([
            'date' => 'required',
            'get_time' => ['required', 'array', 'min:1', function ($attribute, $value, $fail) {
                if (array_diff($value, $this->times)) {
                    $fail('Invalid time selection.');
                }
            }]
        ]);

        // Cek waktu untuk memastikan transaksi tidak lebih kecil dari waktu sekarang
        foreach ($this->times as $time) {
            if (!empty($this->get_time)) {
                foreach ($this->get_time as $get_time) {
                    list($start_time, $end_time) = explode('-', $get_time);
                    $start = Carbon::createFromFormat('H:i', $start_time);
                    $end = Carbon::createFromFormat('H:i', $end_time);

                    if ($currentTime->greaterThan($end)) {
                        return false;
                    }
                }
            }
        }

        // Ambil data lapangan dan cek apakah ada transaksi yang tumpang tindih
        $lapangan = $this->lapangan;
        $lapanganData = Lapangan::where('name', $lapangan)->first();
        $harga = $lapanganData ? $lapanganData->harga : 0;

        // Cek apakah ada transaksi yang sudah ada di lapangan dan tanggal yang sama
        $existingTransactions = transaksi::where('lapangan', $lapangan)
            ->where('tanggal_sewa', $this->date)
            ->get();

        // Loop melalui transaksi yang ada dan periksa apakah ada waktu yang tumpang tindih
        foreach ($existingTransactions as $transaction) {
            foreach ($this->get_time as $get_time) {
                list($start_time, $end_time) = explode('-', $get_time);
                $newStart = Carbon::createFromFormat('H:i', $start_time);
                $newEnd = Carbon::createFromFormat('H:i', $end_time);

                // Ambil waktu dari transaksi yang sudah ada
                list($existingStart, $existingEnd) = explode('-', $transaction->jam_sewa);
                $existingStart = Carbon::createFromFormat('H:i', $existingStart);
                $existingEnd = Carbon::createFromFormat('H:i', $existingEnd);

                // Periksa apakah waktu baru tumpang tindih dengan transaksi yang sudah ada
                if (
                    ($newStart->between($existingStart, $existingEnd, true)) ||
                    ($newEnd->between($existingStart, $existingEnd, true)) ||
                    ($existingStart->between($newStart, $newEnd, true)) ||
                    ($existingEnd->between($newStart, $newEnd, true))
                ) {
                    // Jika ada tumpang tindih, tampilkan pesan error dan hentikan proses
                    session()->flash('error', 'Time slot is already booked for this field.');
                    return;  // Menghentikan eksekusi lebih lanjut
                }
            }
        }

        // Jika tidak ada tumpang tindih, lanjutkan proses untuk menyimpan transaksi
        $data = [
            'tanggal_sewa' => $this->date,
            'jam_sewa' => implode(', ', $this->get_time),
            'lapangan' => $lapangan,
            // 'lama_sewa' => $this->lama_sewa
        ];

        // Menyimpan data transaksi di session untuk digunakan pada pembayaran
        session()->put('data', $data);

        // Redirect ke halaman pembayaran
        return redirect()->route('user.pembayaran');
    }




    public function render()
    {
        return view('livewire.booking.booking');
    }
}
