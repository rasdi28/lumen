<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    
    protected $table = 'blog';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','content','created_by'
    ];

   
}