<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TdcCnv extends OracleEloquent
{
    use Compoships;

    protected $table = 'tdc_cnv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tdc_c_cnv_cod', 'tdc_c_tdc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['tdc_c_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function tdc(): BelongsTo
    {
        return $this->belongsTo(
            Tdc::class,
            ['tdc_c_tdc_cod'],
            ['tdc_cod'],
        );
    }
}
