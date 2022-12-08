<?php

namespace App\Models;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Album extends Model
{
    use HasFactory;
    protected $with = ['author'];
    protected $table = 'albums';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = ['user_id', 'title', 'slug', 'excerpt', 'body'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) => $query->where('title', 'like', '%' . $search . '%') -> orWhere('body', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) => 
                $query->where('username', $author)
            )
        );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    

    // protected $fillable = ['title', 'excerpt', 'body', 'id'];
}
