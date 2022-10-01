<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gmm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['gmm_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['gmm_cfo_cod_ad', 'gmm_cfo_cod_ad_aux', 'gmm_cfo_cod', 'gmm_cfo_compra', 'gmm_cfo_consig', 'gmm_cfo_consumo_aux', 'gmm_cfo_trans_consig_consumo'],
            ['cfo_cod', 'cfo_cod', 'cfo_cod', 'cfo_cod', 'cfo_cod', 'cfo_cod', 'cfo_cod'],
        );
    }
}
