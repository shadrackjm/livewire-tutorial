<?php

namespace App\Livewire;

use Livewire\Component;

class AddTodo extends Component
{
    public $title = '';
    public $description = '';

    public function createTodo(){
        $this->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        auth()->user()->todos()->create([
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
    public function render()
    {
        return view('livewire.add-todo');
    }
}
