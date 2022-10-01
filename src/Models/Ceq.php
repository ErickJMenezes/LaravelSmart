<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ceq extends OracleEloquent
{
    use Compoships;

    protected $table = 'ceq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ceq_eqp_num', 'ceq_cod_part_number'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['ceq_eqp_num'],
            ['eqp_num'],
        );
    }
}
