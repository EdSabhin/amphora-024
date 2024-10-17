<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $fillable = [
    'title',
    'author',
    'description',
    'subHeadline',
    'articleMarkdown',
    'image',
    'imageIframe',
    'video',
    'videoIframe',
    'audio',
    'audioIframe',
    'bibliography',
    'articleTemplate'
  ];
}
