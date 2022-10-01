<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcMaq extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hc_maq_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['hc_maq_eqp_num'],
            ['eqp_num'],
        );
    }

    public function hcShl(): BelongsTo
    {
        return $this->belongsTo(
            HcShl::class,
            ['hc_maq_hc_shl_id'],
            ['hc_shl_id'],
        );
    }
}
