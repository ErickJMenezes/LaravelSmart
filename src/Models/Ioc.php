<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ioc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ioc_orp_num', 'ioc_iop_num', 'ioc_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['ioc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function iop(): BelongsTo
    {
        return $this->belongsTo(
            Iop::class,
            ['ioc_iop_num', 'ioc_iop_num', 'ioc_orp_num', 'ioc_orp_num'],
            ['iop_num', 'iop_orp_num', 'iop_num', 'iop_orp_num'],
        );
    }
}
