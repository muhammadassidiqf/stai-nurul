<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;
    protected $table = 'tentang';
    protected $guarded = [];
    protected $primary_key = 'id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
