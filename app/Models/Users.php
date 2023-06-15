<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $keyType = 'string';  //set able to be varchar in primary key
    use HasFactory;
    public $timestamps=false;
    public $table="user_t";
}
