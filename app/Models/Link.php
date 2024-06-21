<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_link', 'name', 'updated_by', 'status'
    ];

    public static function generateShortLink()
    {
        do {
            $shortLink = Str::random(6); // Generate a random string of 6 characters
        } while (self::where('short_link', $shortLink)->exists()); // Ensure it's unique

        return $shortLink;
    }
}
