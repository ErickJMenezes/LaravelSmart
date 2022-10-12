<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class AgmPrx extends OracleEloquent
{
    use Compoships;

    protected $table = 'agm_prx';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['agm_p_item', 'agm_p_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['agm_p_eqp_num'],
            ['eqp_num'],
        );
    }

    public function prx(): BelongsTo
    {
        return $this->belongsTo(
            Prx::class,
            ['agm_p_prx_cod'],
            ['prx_cod'],
        );
    }
}
