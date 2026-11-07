<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /** @use HasFactory<\Database\Factories\SongFactory> */
    use HasFactory;

    /**
     * Get the artist(s) of the song.
     *
     * @return void
     */
    public function artists()
    {
        return $this->belongsToMany(Artist::class)->withTimestamps();
    }
}
