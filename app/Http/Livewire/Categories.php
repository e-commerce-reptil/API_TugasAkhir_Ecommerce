<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $postId, $categories, $name;
    public $isOpen = 0;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.categories');
    }

    public function showModal() {
        $this->isOpen = true;
    }

    public function hideModal() {
        $this->isOpen = false;
    }

    public function store(){
        $this->validate([
            'name' => 'required',
        ]);

        Category::updateOrCreate(['id' => $this->postId], [
                'name' => $this->name
        ]);

        $this->hideModal();

        session()->flash('info',$this->postId ? 'Update Success' : 'Created Success');

        $this->name = '';
    }

    public function edit($id){
        $Category = Category::findOrFail($id);
        $this->postId = $id;
        $this->name = $Category->name;
        $this->showModal();
    }

    public function delete($id){
        Category::find($id)->delete();
    }

}
