<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoTranslation extends Model
{
    use HasFactory;

    // public $timestamps = true;
    
    protected $table = "photo_translations";
    protected $guarded = [];

}