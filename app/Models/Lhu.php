<?php

namespace App\Models;

use App\Models\DetailStp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lhu extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the detail_stp that owns the Lhu
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function detail_stp(): BelongsTo
    {
        return $this->belongsTo(DetailStp::class);
    }

}
