<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class About extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


    protected $fillable = [
        'number_of_students',
        'number_of_Hafez',
        'number_of_teachers',
        'youtube_video_title',
        'youtube_video_description',
        'youtube_video_link',
    ];

    //getThumbnailAttribute
    public function getThumbnailAttribute()
    {
        return $this->getFirstMediaUrl('thump');
    }
}
