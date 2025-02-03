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

    // Inisialisasi waktu slot
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

    // Defaultkan tanggal ke null, user harus memilih tanggal
    $this->date = null;

    // Inisialisasi array waktu yang dipilih
    $this->get_time = [];
}


    public function choiceTime($time)
{
    // Pastikan tanggal sudah dipilih
    if (!$this->date) {
        session()->flash('error', 'Pilih tanggal terlebih dahulu.');
        return;
    }

    // Periksa apakah tanggal yang dipilih adalah hari ini
    $isToday = Carbon::parse($this->date)->isToday();

    // Ambil bagian jam awal dari slot waktu (misal "08:00" dari "08:00-10:00")
    $selectedTime = substr($time, 0, 5); // Hanya ambil jam awal (misal: "08:00")

    // Validasi jika tanggal adalah hari ini dan waktu sudah lewat
    if ($isToday && $selectedTime <= Carbon::now()->format('H:i')) {
        session()->flash('error', 'Waktu ini sudah berlalu dan tidak dapat dipilih.');
        return;
    }

    // Tambahkan atau hapus waktu dari pilihan
    if (in_array($time, $this->get_time)) {
        // Jika waktu sudah dipilih, hapus dari daftar
        $this->get_time = array_diff($this->get_time, [$time]);
    } else {
        // Jika belum dipilih, tambahkan ke daftar
        $this->get_time = [$time]; // Hanya satu waktu dapat dipilih
    }
}


public function submit()
{
    $currentTime = Carbon::now(); // Ambil waktu sekarang

    // Validasi input
    $this->validate([
        'date' => 'required|date',
        'get_time' => ['required', 'array', 'min:1', function ($attribute, $value, $fail) {
            // Pastikan waktu yang dipilih ada dalam daftar waktu yang disediakan
            if (array_diff($value, $this->times)) {
                $fail('Invalid time selection.');
            }
        }]
    ]);

    // Jika tanggal yang dipilih adalah hari ini, pastikan waktu yang dipilih lebih besar dari waktu sekarang
    if (Carbon::parse($this->date)->isToday()) {
        foreach ($this->get_time as $time) {
            list($start_time, $end_time) = explode('-', $time);
            $start = Carbon::createFromFormat('H:i', $start_time);

            // Jika waktu mulai lebih kecil atau sama dengan waktu sekarang, tampilkan pesan error
            if ($currentTime->greaterThan($start)) {
                session()->flash('error', 'The selected time must be later than the current time.');
                return; // Hentikan eksekusi
            }
        }
    }

    // Cek apakah waktu yang dipilih tumpang tindih dengan waktu yang sudah ada
    foreach ($this->get_time as $time) {
        list($start_time, $end_time) = explode('-', $time);
        $newStart = Carbon::createFromFormat('H:i', $start_time);
        $newEnd = Carbon::createFromFormat('H:i', $end_time);

        // Periksa apakah waktu baru tumpang tindih dengan transaksi yang sudah ada
        $existingTransactions = transaksi::where('lapangan', $this->lapangan)
            ->where('tanggal_sewa', $this->date)
            ->get();

        foreach ($existingTransactions as $transaction) {
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
        'lapangan' => $this->lapangan,
        // 'lama_sewa' => $this->lama_sewa // Pastikan ini ada atau tidak, jika diperlukan
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
