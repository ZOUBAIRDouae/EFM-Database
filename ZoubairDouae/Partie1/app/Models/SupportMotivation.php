<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportMotivation extends Model
{
    protected $fillable = ['content','image_id', 'views', 'reactions'];

    public function image(){
        return $this->belongsTo(ImageMotivation::class);
    }

    public function type_motivation(){
        return $this->hasMany(TypeMotivation::class);
    }
}
