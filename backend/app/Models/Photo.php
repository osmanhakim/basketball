<?php

namespace App\Models;

use App\Traits\Files\HasFile;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory , Translatable , HasFile;

    protected $table = 'photos';

    protected $guarded = [];


    protected $appends = ['image']; // Tell Laravel to include 'image' field when you return JSON

    // public function file()
    // {
    //     return $this->morphOne(File::class, 'fileable');
    // }

    public function getImageAttribute()
    {
        // If there is a related file, return the full URL, otherwise return null
        return $this->file ? url($this->file->path) : null;
    }


    public $translatedAttributes = ['title', 'subtitle'];


    public function project() {
        return $this->belongsTo(Project::class);
        }
        
        public function getActive()
        {
            return $this->status == 1 ? __('words.active') : __('words.inactive');
        }

}