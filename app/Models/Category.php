<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image_path',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($record) {
            if ($record->isDirty('image_path')) {
                $oldImagePath = $record->getOriginal('image_path');
                self::deleteImage($oldImagePath);
            }
        });

        static::deleting(function ($record) {
            $imagePath = $record->image_path;
            self::deleteImage($imagePath);
        });
    }

    public static function deleteImage($imagePath)
    {
        if ($imagePath) {
            Storage::disk('public')->delete($imagePath);
        }
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
