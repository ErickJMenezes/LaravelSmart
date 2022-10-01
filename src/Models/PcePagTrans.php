<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PcePagTrans extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pce_t_pce_pag_cod', 'pce_t_trans_key'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pcePag(): BelongsTo
    {
        return $this->belongsTo(
            PcePag::class,
            ['pce_t_pce_pag_cod'],
            ['pce_pag_cod'],
        );
    }
}
