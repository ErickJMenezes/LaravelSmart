<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cmm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cmm_mat_cod', 'cmm_mat_cod_comp'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['cmm_bvi_cod'],
            ['bvi_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['cmm_mat_cod', 'cmm_mat_cod_comp'],
            ['mat_cod', 'mat_cod'],
        );
    }
}
