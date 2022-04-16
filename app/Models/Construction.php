<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    use HasFactory;

      protected $fillable = [
      'id','title', 'description'
      ];

      public function construction_images(){
      return $this->hasMany(ConstructionImages::class);
      }
}
