<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Acv extends OracleEloquent
{
    use Compoships;

    protected $table = 'acv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['acv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['acv_eqp_num'],
            ['eqp_num'],
        );
    }
}
