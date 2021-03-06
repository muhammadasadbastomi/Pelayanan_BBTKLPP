<?php

namespace App\Models;

use App\Models\JenisPengujian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailJenisPengujian extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the jenis_pengujian that owns the DetailJenisPengujian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenis_pengujian(): BelongsTo
    {
        return $this->belongsTo(JenisPengujian::class);
    }
}
