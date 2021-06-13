<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Articles extends Component
{
    public $postId, $articles, $judul, $description, $link;
    public $isOpen = 0;

    public function render()
    {
        $this->articles = Article::all();
        return view('livewire.articles');
    }

    public function showModal() {
        $this->isOpen = true;
    }

    public function hideModal() {
        $this->isOpen = false;
    }

    // public function store(){
    //     $this->validate([
    //         'judul' => 'required',
    //         'description' => 'required',
    //          'link' => 'required'
    //     ]);

    //     Article::updateOrCreate(['id' => $this->postId], [
    //             'judul' => $this->judul,
    //             'description' => $this->description,
    //             'link' => $this->link
    //     ]);

    //     $this->hideModal();

    //     session()->flash('info',$this->postId ? 'Update Success' : 'Created Success');

    //     $this->judul = '';
    //     $this->description = '';
    //     $this->link = '';
    // }

    // public function edit($id){
    //     $article = Article::findOrFail($id);
    //     $this->postId = $id;
    //     $this->judul = $article->judul;
    //     $this->description = $article->description;
    //     $this->link = $article->link;
    //     $this->showModal();
    // }

    // public function delete($id){
    //     Article::find($id)->delete();
    // }

    // new
    public function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'description' => 'required',
             'link' => 'required'
        ]);

        $articles = new Article();
        $articles->judul = $request->judul;
        $articles->description = $request->description;
        $articles->link = $request->link;
        $articles->save();

        return response()->json([
            'message' => 'Data berhasil ditambahkan'
        ], 200);
    }




    // CARA GAGAL 
    //public $isModal;

    // protected $fillable = [
    //     'judul',
    //     'description',
    //     'link'
    // ];

    // public function create()
    // {
    //     $this->resetFields();
    //     $this->openModal();
    // }

    // public function resetFields()
    // {
    //     $this->judul = '';
    //     $this->description = '';
    //     $this->link = '';
    //     // $this->id ='';
    // }

    // public function openModal()
    // {
    //     $this->isModal = true;
    // }

    // public function closeModal()
    // {
    //     $this->isModal = false;
    // }

    // public function store()
    // {
    //     $this->validate([
    //         'judul' => 'required',
    //         'description' => 'required',
    //         'link' => 'required'
    //     ]);

    //     Article::updateOrCreate(
    //         [
    //             'judul' => $this->judul,
    //             'description' => $this->description,
    //             'link' => $this->link
    //         ]
    //         );

    //         session()->flash('message', $this->id ? $this->judul . ' Diperbarui':$this->judul . ' Ditambahkan');
    //         $this->closeModal();
    //         $this->resetFields();

    // }

    // public function render()
    // {
    //     $this->articles = Article::orderBy('created_at', 'DESC')->get();

    //     return view('livewire.articles');
    // }
}
