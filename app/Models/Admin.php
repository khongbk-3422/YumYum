<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $keyType = 'string';  //set able to be varchar in primary key
    protected $primaryKey = 'admin_id';
    use HasFactory;
    public $timestamps=false;
    public $table="admin_t";
}
