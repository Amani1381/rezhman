<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Blog extends Model

{
    public function image()
    {

        return $this->belongsTo(Image::class);



    }
}
