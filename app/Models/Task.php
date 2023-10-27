<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'completed', 'book_id'
    ];
    // function for forginidKey with book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
