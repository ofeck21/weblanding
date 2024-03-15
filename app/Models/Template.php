<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'demo_url',
        'thumbnail',
        'is_recommended'
    ];

    public function category(): object
    {
        return $this->belongsTo(Category::class);
    }
}
