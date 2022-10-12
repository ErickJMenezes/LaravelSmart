<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Aap extends OracleEloquent
{
    use Compoships;

    protected $table = 'aap';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['aap_amo_cod', 'aap_elb_cod'];

    protected $connection = 'smart';

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
