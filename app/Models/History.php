<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $primaryKey = null; // Remove the $primaryKey property

    public $incrementing = false; // Disable auto-incrementing

    protected $fillable = [
        'cust_id',
        'rest_id',
        'datetime',
    ];

    protected $keyType = 'string'; // Set the primary key type

    protected $table = 'history_t';
    public $timestamps = false;
    
    use HasFactory;
    
}
