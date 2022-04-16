<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Test extends Model
{
    
    protected $table = 'table_test';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama','desc'
    ];

    
   
}