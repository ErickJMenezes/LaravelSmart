<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExmStr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['exm_e_exm_cod', 'exm_e_str_solic'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['exm_e_exm_cod'],
            ['exm_cod'],
        );
    }

    public function grp(): BelongsTo
    {
        return $this->belongsTo(
            Grp::class,
            ['exm_e_msg_grp_destino'],
            ['grp_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['exm_e_str_solic'],
            ['str_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['exm_e_psv_fila'],
            ['psv_cod'],
        );
    }
}
