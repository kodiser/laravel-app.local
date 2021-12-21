<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // массив который покажет какие поля должны быть доступны для массового заполнения
    protected $fillable = ['title', 'body', 'img', 'slug'];

    // массив который покажет какие поля НЕ должны быть доступны для массового заполнения
    // protected $guarded = [];

    // записываем правила взаимоотношений с другими моделями

    // данная модель может иметь много комментов
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // взаимотношение статистики будет 1 к 1
    public function state()
    {
        return $this->hasOne(State::class);
    }

    // взаимотношение c тегами многие ко многим

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
