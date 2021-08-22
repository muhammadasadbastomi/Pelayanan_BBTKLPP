<?php

namespace App\Models;

use App\Models\DetailStp;
use App\Models\Permohonan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stp extends Model
{
    protected $guarded = ['id'];

    /**
     * Get all of the detail_stp for the Stp
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detail_stp(): HasMany
    {
        return $this->hasMany(DetailStp::class);
    }

    /**
     * Get the permohonan that owns the Stp
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permohonan(): BelongsTo
    {
        return $this->belongsTo(Permohonan::class);
    }
}
