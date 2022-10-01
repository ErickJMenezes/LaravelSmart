<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Aap extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['aap_amo_cod', 'aap_elb_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['aap_amo_cod'],
            ['amo_cod'],
        );
    }

    public function elb(): BelongsTo
    {
        return $this->belongsTo(
            Elb::class,
            ['aap_elb_cod'],
            ['elb_cod'],
        );
    }
}
