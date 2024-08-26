<?php

namespace App\Livewire\Boilerplate;

use Livewire\Component;
use App\Models\Template;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class TemplateShow extends Component
{
    public $slug;
    public $template;

    public function mount($slug){
        $this->slug = $slug;
        $this->template = Template::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.boilerplate.template-show');
    }
}
