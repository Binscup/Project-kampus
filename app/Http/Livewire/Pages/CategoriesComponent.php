<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class CategoriesComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.categories-component')->layout("template.app");
    }
}
