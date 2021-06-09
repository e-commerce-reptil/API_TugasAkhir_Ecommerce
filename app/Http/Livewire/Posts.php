<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Product;

class Posts extends Component
{
    public $products;
    public $postId, $nama_product, $tgl_lahir,$line,$parent,$note,$harga_product,$desc_product,
            $pic_product,$category_id;
    // Modal
    public $isOpen = 0;

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.posts');
    }

    public function showModal() {
        $this->isOpen = true;
    }

    public function hideModal() {
        $this->isOpen = false;
    }

    public function store(){
        $this->validate([
            'nama_product' => 'required',
            'tgl_lahir' => 'required',
            'line' => 'required',
            'parent' => 'required',
            'note' => 'required',
            'harga_product' => 'required',
            'desc_product' => 'required',
            'pic_product' => 'required',
            'category_id' => 'required'
        ]);

        Product::updateOrCreate(['id' => $this->postId], [
            'nama_product' => $this->nama_product,
            'tgl_lahir' => $this->tgl_lahir,
            'line' => $this->line,
            'parent' => $this->parent,
            'note' => $this->note,
            'harga_product' => $this->harga_product,
            'desc_product' => $this->desc_product,
            'pic_product' => $this->pic_product,
            'category_id' => $this->category_id
        ]);

        $this->hideModal();

        session()->flash('info',$this->postId ? 'Update Success' : 'Created Success');

        $this->postId = '';
        $this->nama_product = '';
        $this->tgl_lahir = '';
        $this->line = '';
        $this->parent = '';
        $this->note = '';
        $this->harga_product = '';
        $this->desc_product = '';
        $this->pic_product = '';
        $this->category_id = '';
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        $this->postId = $id;
        $this->nama_product = $product->nama_product;
        $this->tgl_lahir = $product->tgl_lahir;
        $this->line = $product->line;
        $this->parent = $product->parent;
        $this->note = $product->note;
        $this->harga_product = $product->harga_product;
        $this->desc_product = $product->desc_product;
        $this->pic_product = $product->pic_product;
        $this->category_id = $product->category_id;

        $this->showModal();
    }

    public function delete($id){
        Product::find($id)->delete();
    }
}
