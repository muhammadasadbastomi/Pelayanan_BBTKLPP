<?php

namespace App\Models;

use App\Models\DetailStp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lhus extends Model
{
    protected $guarded = ['id'];

    public function detail_stp(): BelongsTo
    {
        return $this->belongsTo(DetailStp::class);
    }
}
