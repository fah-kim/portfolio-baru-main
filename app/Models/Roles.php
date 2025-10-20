<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = ['role_name'];

    public function user() {
        return $this->hasMany(User::class);
    }
}
