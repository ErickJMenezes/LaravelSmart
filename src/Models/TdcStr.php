<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TdcStr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['tdc_s_tdc_cod', 'tdc_s_str_solic'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['tdc_s_str_solic'],
            ['str_cod'],
        );
    }

    public function tdc(): BelongsTo
    {
        return $this->belongsTo(
            Tdc::class,
            ['tdc_s_tdc_cod'],
            ['tdc_cod'],
        );
    }
}
