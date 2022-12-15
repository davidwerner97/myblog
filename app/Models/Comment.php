<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        $this->belongsTo(Post::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function parent_comment()
    {
        $this->belongsTo($this, 'parent_id', 'id');
    }

    public function replies()
    {
        $this->hasMany($this, 'parent_id', 'id');

    }
}
