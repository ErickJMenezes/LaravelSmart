<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwCcr extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_ccr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ccr_mmyy', 'dw_ccr_psv_cod', 'dw_ccr_str_unid'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dw_ccr_psv_cod'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['dw_ccr_str_unid'],
            ['str_cod'],
        );
    }
}
