<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PceBul extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['p_bul_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['p_bul_bul_med'],
            ['bul_med'],
        );
    }

    public function pce(): BelongsTo
    {
        return $this->belongsTo(
            Pce::class,
            ['p_bul_pce_id'],
            ['pce_id'],
        );
    }
}
