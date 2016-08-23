<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Table name ON Model
    protected $table = 'tasks';

    // Mass Assignable
    protected $fillable = ['name'];


    // Excluded Attributes
    protected $hidden = [];
    

}
