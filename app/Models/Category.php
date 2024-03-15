<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    // boot method
    protected static function boot(): void
    {
        parent::boot();

        // generate slug before creating a new category
        static::creating(function ($category) {
            //generate unique slug by appending a number to the slug
            $originalSlug = $slug = \Str::slug($category->name);
            $count = 1;
            while (static::whereSlug($slug)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }
            $category->slug = $slug;
        });
    }

    public function templates(): object
    {
        return $this->hasMany(Template::class);
    }

}
