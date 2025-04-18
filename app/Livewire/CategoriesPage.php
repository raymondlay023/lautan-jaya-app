<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Categories - Lautan Jaya App')]
class CategoriesPage extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.categories-page', compact('categories'));
    }
}
