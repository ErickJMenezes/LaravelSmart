<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pap extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pap_pat_cod', 'pap_elb_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function elb(): BelongsTo
    {
        return $this->belongsTo(
            Elb::class,
            ['pap_elb_cod'],
            ['elb_cod'],
        );
    }

    public function pat(): BelongsTo
    {
        return $this->belongsTo(
            Pat::class,
            ['pap_pat_cod'],
            ['pat_cod'],
        );
    }
}
