<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = "articles";
    protected $fillable = ['judul', 'description', 'link'];

    // public $articles, $judul, $description, $link;
    // public $isModal;

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
    // }

    // public function openModal()
    // {
    //     $this->isModal = true;
    // }

    // public function closeModal()
    // {
    //     $this->isModal = false;
    // }

    public function users()
    {
        return $this -> hasMany(User::class);
    }

    public function useradmins()
    {
        return $this -> hasMany(UserAdmin::class);
    }
}
