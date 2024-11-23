<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'message',
        'date',
        'operator_id',
        'status_id',
        'category_id',

    ];

    // protected $casts = [
        // 'date' => 'datetime:d-m-Y'
    // ];

    public function operator(){
        return $this->belongsTo(Operator::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
