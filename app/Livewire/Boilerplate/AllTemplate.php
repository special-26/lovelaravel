<?php

namespace App\Livewire\Boilerplate;

use Livewire\Component;
use App\Models\Template;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class AllTemplate extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.boilerplate.all-template', [
            'templates' => Template::paginate(2)
        ]);
    }
}
