<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwAgm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_agm_psv_cod', 'dw_agm_cnv_cod', 'dw_agm_mmyy', 'dw_agm_ctf_tipo', 'dw_agm_str_cod', 'dw_agm_ctf_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dw_agm_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['dw_agm_ctf_cod', 'dw_agm_ctf_cod', 'dw_agm_ctf_tipo', 'dw_agm_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dw_agm_psv_cod'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['dw_agm_str_cod'],
            ['str_cod'],
        );
    }
}
