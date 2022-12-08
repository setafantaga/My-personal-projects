<?php

namespace App\Models;
use App\Models\Album;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'album_id', 'body'];

    public function album() // album_id
    {
        return $this->belongsTo(Album::class);
    }

    public function author() //author_id
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
