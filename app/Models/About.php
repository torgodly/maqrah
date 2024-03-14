<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;


    protected $fillable = [
        'number_of_students',
        'number_of_Hafez',
        'number_of_teachers',
        'youtube_video_title',
        'youtube_video_description',
        'youtube_video_link',
    ];
}
