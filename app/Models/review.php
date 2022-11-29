<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'star',
        'status',
        'review',
    ];
    public function users(){
        return $this->belongsTo(User::class);
    }
}
