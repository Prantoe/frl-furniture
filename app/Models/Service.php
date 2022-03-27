<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{

    use HasFactory;

    protected $fillable = [
        'id','title', 'description'
    ];

    public function service_images(){
        return $this->hasMany(ServiceImages::class);
    }
}