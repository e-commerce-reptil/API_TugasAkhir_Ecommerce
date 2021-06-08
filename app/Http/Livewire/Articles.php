<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Articles extends Component
{
    public $articles;

    public function render()
    {
        $this->articles = Article::orderBy('created_at', 'DESC')->get();

        return view('livewire.articles');
    }
}
