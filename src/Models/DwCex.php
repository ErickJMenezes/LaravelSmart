<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwCex extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_cex';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_cex_str_unid', 'dw_cex_psv_cod', 'dw_cex_mmyy'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dw_cex_psv_cod'],
            ['psv_cod'],
        );
    }
}
