<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class item extends Model
{
    protected $fillable = ['name', 'category_id', 'stock', 'unit'];

    use HasFactory;

    public function category() {
        return $this->belongsTo(category::class);
    }
}
