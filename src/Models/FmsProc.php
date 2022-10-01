<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class FmsProc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fms_p_fms_id', 'fms_p_dthr_processa'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fms(): BelongsTo
    {
        return $this->belongsTo(
            Fms::class,
            ['fms_p_fms_id'],
            ['fms_id'],
        );
    }

    public function nwa(): BelongsTo
    {
        return $this->belongsTo(
            Nwa::class,
            ['fms_p_msg_nwa_id', 'fms_p_msg_resposta_nwa_id'],
            ['nwa_id', 'nwa_id'],
        );
    }
}
