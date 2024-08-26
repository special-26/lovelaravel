<?php

namespace App\Livewire;

use Livewire\Component;

class Categories extends Component
{
    public $category;

    public function render()
    {
        return view('livewire.categories');
    }
}
