<?php

namespace App\Models;

use App\Models\DetailJenisPengujian;
use App\Models\Permohonan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPermohonan extends Model
{
    protected $guarded = ['id'];
    /**
     * Get the permohonan that owns the DetailPermohonan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permohonan(): BelongsTo
    {
        return $this->belongsTo(Permohonan::class);
    }

    public function detail_jenis_pengujian(): BelongsTo
    {
        return $this->belongsTo(DetailJenisPengujian::class);
    }
}
