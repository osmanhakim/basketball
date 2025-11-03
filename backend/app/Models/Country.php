<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Country extends Model
{
    use HasFactory, Translatable;

    protected $table = 'countries';

    protected $guarded = [];

    public $translatedAttributes = ['name'];

    public $timestamps = true;

    // Start Relation
    public function user()
    {
        return $this->belongsTo(User::class, 'country_id');
    }

    public function cities()
    {
        return $this->hasMany(Country::class);
    }
    // End Relation
}
