<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Construction;

class ConstructionImages extends Model
{
    use HasFactory;

    protected $table = 'construction_images';
    protected $fillable=[
    'constraction_id',
    'image'
    ];

    public function constructions(){
    return $this->belongsTo(Construction::class);
    }
}
