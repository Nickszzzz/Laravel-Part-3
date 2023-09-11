<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $table = 'posts';

    protected $fillable = [
        'title',
        'thumbnail',
        'excerpt',
        'content',
        'slug',
        'published_at',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
