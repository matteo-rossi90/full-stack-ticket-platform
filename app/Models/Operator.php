<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = [
            "is_available"
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
