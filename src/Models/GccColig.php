<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GccColig extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['gcc_c_cod_origem', 'gcc_c_cod_pagante'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['gcc_c_ccr_colig_origem', 'gcc_c_ccr_colig_pagante'],
            ['ccr_cod', 'ccr_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['gcc_c_cod_origem', 'gcc_c_cod_pagante'],
            ['gcc_cod', 'gcc_cod'],
        );
    }
}
