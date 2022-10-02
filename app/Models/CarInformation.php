<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarInformation extends Model
{
    use HasFactory;
    protected $fillable = ["car_id","car_features_id"];
}