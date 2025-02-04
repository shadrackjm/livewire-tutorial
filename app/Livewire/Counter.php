<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;

    public function increment()
    {
        $this->counter++; //add 1 to counter
    }

    public function decrement()
    {
        if ($this->counter > 0)
            $this->counter--; //subtract 1 from counter
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
