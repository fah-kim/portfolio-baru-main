<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    protected $fillable =  ['name', 'description'];

    use HasFactory;

    public function item() {
        return $this->hasMany(item::class);
    }
}
