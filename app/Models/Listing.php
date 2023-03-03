<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

    public function scopeFilter($query, array $filters) {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%' )
            ->orwhere('sold', 'like', '%' . request('tag') . '%' )
            ->orwhere('forsale', 'like', '%' . request('tag') . '%' )
            ->orwhere('forrent', 'like', '%' . request('tag') . '%' )
            ->orwhere('rented', 'like', '%' . request('tag') . '%' );
        }

        if ($filters['search'] ?? false) {
            $query->where('propertyName', 'like', '%' . request('search') . '%' )
                ->orwhere('propertyType', 'like', '%' . request('search') . '%' )
                ->orwhere('model', 'like', '%' . request('search') . '%' )
                ->orWhere('location', 'like', '%' . request('search') . '%' )
                ->orWhere('tags', 'like', '%' . request('search') . '%' )
                ->orWhere('price', 'like', '%' . request('search') . '%' )
                ->orWhere('description', 'like', '%' . request('search') . '%' );
        }
    }

     //relationship kay User
     public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
