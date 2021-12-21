<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['likes', 'views', 'article_id'];

    // мы всегда будем доставать статистику из статьи, поэтому никаких других методов не нужно
}
