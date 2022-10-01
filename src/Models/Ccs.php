<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ccs extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ccs_cct_cod_origem', 'ccs_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ccs_str_cod'],
            ['str_cod'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['ccs_cct_cod_origem', 'ccs_cct_cod_destino'],
            ['cct_cod', 'cct_cod'],
        );
    }
}
