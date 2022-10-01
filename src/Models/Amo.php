<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Amo extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['amo_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function qlf(): BelongsTo
    {
        return $this->belongsTo(
            Qlf::class,
            ['amo_qlf_rot', 'amo_qlf_rot', 'amo_qlf_rot', 'amo_atr_num', 'amo_atr_num', 'amo_atr_num', 'amo_dsc_cod', 'amo_dsc_cod', 'amo_dsc_cod'],
            ['qlf_rot', 'qlf_atr', 'qlf_dsc', 'qlf_rot', 'qlf_atr', 'qlf_dsc', 'qlf_rot', 'qlf_atr', 'qlf_dsc'],
        );
    }
}
