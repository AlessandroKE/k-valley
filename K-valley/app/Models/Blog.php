<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'is_published',
        'author_id',
        'category_id'
    ];

    public function author(){
        // To be create by 
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
