<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
    protected function fullname(): Attribute{
        return Attribute::make(
            get: function ($value) {
                return $this->brand . ' ' . $this->model . ' ' . $this->year;
            },
        );
    }
    public function type(): BelongsTo{
        return $this->belongsTo(Type::class);
    }
    public function location(): BelongsTo{
        return $this->belongsTo(Location::class);
    }
    public function orders(): HasMany{
        return $this->hasMany(Order::class);
    }
}
