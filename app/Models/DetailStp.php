<?php

namespace App\Models;

use App\Models\DetailJenisPengujian;
use App\Models\Lhu;
use App\Models\Lhus;
use App\Models\Stp;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DetailStp extends Model
{
    /**
     * Get the user that owns the DetailStp
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    protected $guarded = ['id'];
    public function stp(): BelongsTo
    {
        return $this->belongsTo(Stp::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function detail_jenis_pengujian(): BelongsTo
    {
        return $this->belongsTo(DetailJenisPengujian::class);
    }

    /**
     * Get all of the lhus for the DetailStp
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lhus(): HasMany
    {
        return $this->hasMany(Lhus::class);
    }

    public function lhu(): HasMany
    {
        return $this->hasMany(Lhu::class);
    }
}
