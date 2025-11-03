<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class City extends Model
{
    use HasFactory, Translatable;

    protected $table = 'cities';

    protected $guarded = [];

    public $translatedAttributes = ['name'];

    public $timestamps = true;

    // Start Relation
    public function user()
    {
        return $this->belongsTo(User::class, 'city_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'city_id');
    }
    // End Relation
}
