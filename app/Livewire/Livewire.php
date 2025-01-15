<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Livewire extends Component
{
    use LivewireAlert;
    
    public function submit()
    {
        $this->alert('error', 'error');
    }

    public function render()
    {
        return view('livewire.livewire');
    }
}
