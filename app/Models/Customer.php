<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $keyType = 'string';  //set able to be varchar in primary key
    protected $primaryKey = 'cust_id';
    use HasFactory;
    public $timestamps=false;
    public $table="customer_t";
}
