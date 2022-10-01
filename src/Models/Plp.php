<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Plp extends OracleEloquent
{
    use Compoships;

    protected $table = 'plp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['plp_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nwa(): BelongsTo
    {
        return $this->belongsTo(
            Nwa::class,
            ['plp_nwa_id_envio', 'plp_nwa_id_ret'],
            ['nwa_id', 'nwa_id'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['plp_emp_cod'],
            ['emp_cod'],
        );
    }

    public function pce(): BelongsTo
    {
        return $this->belongsTo(
            Pce::class,
            ['plp_pce_id'],
            ['pce_id'],
        );
    }

    public function rpc(): BelongsTo
    {
        return $this->belongsTo(
            Rpc::class,
            ['plp_rpc_id'],
            ['rpc_id'],
        );
    }
}
