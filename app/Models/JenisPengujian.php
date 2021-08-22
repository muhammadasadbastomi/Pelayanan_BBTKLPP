<?php

namespace App\Models;

use App\Models\Jenis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisPengujian extends Model
{
    protected $guarded = ['id'];
/**
 * Get the jenis that owns the JenisPengujian
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
    public function jenis(): BelongsTo
    {
        return $this->belongsTo(Jenis::class);
    }

    /**
     * Get all of the detail_jenis_pengujian for the JenisPengujian
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detail_jenis_pengujian(): HasMany
    {
        return $this->hasMany(DetailJenisPengujian::class);
    }
}
