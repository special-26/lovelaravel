<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'slug', 'thumbnail', 'video_thumbnail', 'tech_stack', 'download_link', 'live_preview_link'
    ];

}
