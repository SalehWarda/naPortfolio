<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function getRouteKeyName()
    {
       return 'uid';
    }

    public function getThumbnailAttribute()
    {

        if ($this->thumbnail_image) {
            return '/videos/' . $this->uid . '/' . $this->thumbnail_image;
        }
        else {
            return '/videos/' . 'noImage.jpg';
        }
    }

    public function getVideoAttribute()
    {

        if ($this->processed_file) {
            return '/videos/' . $this->uid . '/' . $this->processed_file;
        }
        else {
            return '/videos/' . 'noImage.jpg';
        }
    }
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','id');
    }
}
