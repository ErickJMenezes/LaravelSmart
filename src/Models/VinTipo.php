<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class VinTipo extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['vin_t_cod', 'vin_t_vin_c_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function vinCod(): BelongsTo
    {
        return $this->belongsTo(
            VinCod::class,
            ['vin_t_vin_c_cod'],
            ['vin_c_cod'],
        );
    }
}
