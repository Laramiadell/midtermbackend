<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'genre', 'date_published', 'publisher', 'pages', 'shelf_no',];

    public function container() {
        return $this->belongsTo('App\Models\Book', 'shelf_no', 'id');
    }
}