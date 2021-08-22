<?php

namespace App\Models;

use App\Models\DetailPermohonan;
use App\Models\JenisPengujian;
use App\Models\Stp;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Permohonan extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the user that owns the Permohonan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the jenis_pengujian that owns the Permohonan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenis_pengujian(): BelongsTo
    {
        return $this->belongsTo(JenisPengujian::class);
    }

    /**
     * Get all of the detail_permohonan for the Permohonan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detail_permohonan(): HasMany
    {
        return $this->hasMany(DetailPermohonan::class);
    }

    /**
     * Get the stp associated with the Permohonan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function stp(): HasOne
    {
        return $this->hasOne(Stp::class);
    }
}
