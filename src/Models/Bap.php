<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bap extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['bap_elb_cod', 'bap_bac_dsc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['bap_bac_dsc_cod'],
            ['dsc_cod'],
        );
    }

    public function elb(): BelongsTo
    {
        return $this->belongsTo(
            Elb::class,
            ['bap_elb_cod'],
            ['elb_cod'],
        );
    }
}
