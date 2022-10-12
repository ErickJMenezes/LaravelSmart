<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TdcGrp extends OracleEloquent
{
    use Compoships;

    protected $table = 'tdc_grp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tdc_g_grp_cod', 'tdc_g_tdc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function grp(): BelongsTo
    {
        return $this->belongsTo(
            Grp::class,
            ['tdc_g_grp_cod'],
            ['grp_cod'],
        );
    }

    public function tdc(): BelongsTo
    {
        return $this->belongsTo(
            Tdc::class,
            ['tdc_g_tdc_cod'],
            ['tdc_cod'],
        );
    }
}
