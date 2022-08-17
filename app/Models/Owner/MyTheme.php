<?php

namespace App\Models\Owner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyTheme extends Model
{
    use HasFactory;

    protected $table = 'my_themes';
    protected $fillable = [
        'type', 'category', 'name', 'is_imagee', 'is_main', 'is_active', 'image_path', 'media_dir'
    ];
}
