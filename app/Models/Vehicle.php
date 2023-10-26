<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $fillable = [
        'type_id',
        'location_id',
        'brand',
        'model',
        'year',
        'color',
        'transmission',
        'fuel',
        'capacity',
        'price',
        'image',
    ];
    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
