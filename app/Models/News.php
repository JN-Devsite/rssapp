<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Touhidurabir\ModelSanitize\Sanitizable;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    use Sanitizable;

    protected $fillable = ['permalink', 'title', 'description', 'content', 'post_date', 'author'];
}
