<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmbody extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public $timestamps = false;
    
    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }
}
