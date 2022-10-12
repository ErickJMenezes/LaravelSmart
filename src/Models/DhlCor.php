<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DhlCor extends OracleEloquent
{
    use Compoships;

    protected $table = 'dhl_cor';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dhl_c_awb_number', 'dhl_c_epc_cod_etiqueta'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function dhl(): BelongsTo
    {
        return $this->belongsTo(
            Dhl::class,
            ['dhl_c_awb_number'],
            ['dhl_awb_number'],
        );
    }
}
