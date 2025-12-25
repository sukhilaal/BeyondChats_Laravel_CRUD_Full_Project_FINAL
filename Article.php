<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    use HasFactory;
    protected $fillable = [
        'title','slug','excerpt','content','author',
        'category','image_url','source_url','published_at'
    ];
    protected $casts = ['published_at' => 'date'];
}
