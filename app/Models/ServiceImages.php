<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class ServiceImages extends Model
{
    use HasFactory;
    protected $table = 'service_images';    
    protected $fillable=[
        'services_id',
        'image'
    ];

    public function services(){
        return $this->belongsTo(Service::class);
    }
}