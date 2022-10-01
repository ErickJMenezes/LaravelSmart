<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Epc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['epc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['epc_emp_cod'],
            ['emp_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['epc_pac_reg'],
            ['pac_reg'],
        );
    }

    public function plp(): BelongsTo
    {
        return $this->belongsTo(
            Plp::class,
            ['epc_plp_id'],
            ['plp_id'],
        );
    }

    public function epcSrv(): BelongsTo
    {
        return $this->belongsTo(
            EpcSrv::class,
            ['epc_cod_servico'],
            ['epc_s_cod'],
        );
    }
}
