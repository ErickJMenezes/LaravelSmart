<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EqpTcr extends OracleEloquent
{
    use Compoships;

    protected $table = 'eqp_tcr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['eqp_t_eqp_num', 'eqp_t_tcr_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['eqp_t_eqp_num'],
            ['eqp_num'],
        );
    }

    public function tcr(): BelongsTo
    {
        return $this->belongsTo(
            Tcr::class,
            ['eqp_t_tcr_cod'],
            ['tcr_cod'],
        );
    }
}
