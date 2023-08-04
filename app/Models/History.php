<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class History extends Model  				
{
    use HasFactory;
    protected $table='clients';
    protected $fillable=['project','happy_client','hour_of_support','hard_worker'];
}