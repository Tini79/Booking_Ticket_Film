<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function genres() {
        // return $this->belongsToMany(Genre::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function filmBooking() {
        return $this->hasMany(FilmBooking::class);
    }

    public function user() {
        return $this->belongsToMany(User::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')->orWhere('description', 'like', '%' . $search . '%')->orWhere('price', 'like', '%' . $search . '%');
        });
    }
}
