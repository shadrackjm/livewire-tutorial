<?php

namespace App\Livewire;

use Livewire\Component;

class ManageTodo extends Component
{
    public function render()
    {
        return view('livewire.manage-todo', [
            'todos' => auth()->user()->todos()->get()
        ]);
    }
}
