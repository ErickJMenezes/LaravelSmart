<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dlm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dlm_bul_med_dil', 'dlm_bul_med_psc'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['dlm_bul_med_psc', 'dlm_bul_med_dil'],
            ['bul_med', 'bul_med'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['dlm_bun_cod'],
            ['bun_cod'],
        );
    }
}
