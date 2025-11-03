<?php

namespace App\Models;

use App\Traits\Files\HasFile;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory, Translatable , HasFile;

    protected $table = 'videos';

    protected $guarded = [];

    public $translatedAttributes = ['title','description'];

    public $timestamps = true;
    
    protected $appends = ['image'];

    public function getImageAttribute()
    {
        $image = $this->file()->first();
        return $image ? $image->path : asset('uploads/default_image.png');
    }
    

    public function file()
    {
        return $this->morphOne(File::class, 'filable');
    }

    public function getActive()
    {
        return $this->status == 1 ? __('words.active') : __('words.inactive');
    }

}