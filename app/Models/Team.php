<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['name', 'readings'];
    public function setReadingsAttribute($value)
    {
        $this->attributes['readings'] = json_encode($value);
    }

    // Define an accessor if you want to retrieve the attribute as an array
    public function getReadingsAttribute($value)
    {
        return json_decode($value, true);
    }

    //get image attribute
    public function getImageAttribute()
    {
        return $this->getFirstMedia('Team')?->getUrl();
    }

}
