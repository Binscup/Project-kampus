<?php

namespace App\Http\Livewire\Pages\Categories;

use App\Models\Categories;
use Livewire\Component;

class CreateComponent extends Component
{
    public $name;
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();
        Categories::create([
            'name' => $this->name

        ]);
        session()->flash('message', 'Category succesfully created.');
        return redirect(back());
    }
    public function render()
    {
        return view('livewire.pages.categories.create-component')->layout("template.app");
    }
}
