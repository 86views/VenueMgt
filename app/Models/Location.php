<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media; 


class Location extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
      
    ];

    public $table = 'locations';

    protected $appends = [
        'photo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    
    public function registerMediaConversions(Media $media = null) : void
    
    {
       $this->addMediaConversion('thumb')->width(50)->height(50);        
    }

    public function venues() 
    {
        return $this->hasMany(
               Venue::class,
               'location_id',
               'id',
        );
    }
  
     public function getPhotoAttribute() 
     {
         $file = $this->getMedia('photo')->last();

         if($file) {
             $file->url        = $file->getUrl();
             $file->thumbnail  = $file->getUrl('thumb');
         }

         return $file;
     } 
    
}
