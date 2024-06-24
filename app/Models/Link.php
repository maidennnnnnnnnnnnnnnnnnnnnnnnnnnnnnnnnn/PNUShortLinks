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

    public static function generateShortLink(): string
    {
        do {
            $shortLink = Str::random(6);
        } while (self::where('short_link', $shortLink)->exists());

        return $shortLink;
    }


}
