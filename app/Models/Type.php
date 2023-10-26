<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;
    protected $table = 'types';
    protected $fillable = [
        'name',
    ];
    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }
}
