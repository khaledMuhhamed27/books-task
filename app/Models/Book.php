<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'summary', 'published_date'];
    // function for forginidKey with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // function for forginidKey with Task
    public function task()
    {
        return $this->hasMany(Task::class);
    }
}
