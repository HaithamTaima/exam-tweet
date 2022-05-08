<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;
    protected $table = 'tweets';

    protected $fillable = ['content'];

    public function users()
    {
        return $this->belongsTo(User::class)->latest('user_id');
    }
}
