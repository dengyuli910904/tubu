<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table="groups";
    public $timestamp = true;
    protected $casts = [
	    'id' => 'string'
	];
}
