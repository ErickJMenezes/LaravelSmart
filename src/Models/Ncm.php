<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ncm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ncm_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cfop(): BelongsTo
    {
        return $this->belongsTo(
            Cfop::class,
            ['ncm_cof_cfop_cod', 'ncm_pis_cfop_cod'],
            ['cfop_cod', 'cfop_cod'],
        );
    }

    public function cst(): BelongsTo
    {
        return $this->belongsTo(
            Cst::class,
            ['ncm_cof_cst_cod', 'ncm_pis_cst_cod'],
            ['cst_cod', 'cst_cod'],
        );
    }
}
