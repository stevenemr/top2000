<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistFactory> */
    use HasFactory;

    /**
     * Get all members of the band.
     *
     * @return BelongsToMany
     */
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class, 'band_artist', 'band_id', 'artist_id')
            ->withTimestamps();
    }

    /**
     * Check if this artist is a band.
     * 
     * @return bool
     */ 
    public function isBand(): bool
    {
        return $this->members()->count() > 0;
    }

    /**
     * Get all songs of the artist.
     *
     * @return BelongsToMany
     */
    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class);
    }
}
