<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class BooksComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.books-component')->layout("template.app");
    }
}
