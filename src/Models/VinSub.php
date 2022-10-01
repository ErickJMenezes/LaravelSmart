<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class VinSub extends OracleEloquent
{
    use Compoships;

    protected $table = 'vin_sub';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vin_s_cod', 'vin_s_vin_t_cod', 'vin_s_vin_c_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function vinCod(): BelongsTo
    {
        return $this->belongsTo(
            VinCod::class,
            ['vin_s_vin_c_cod'],
            ['vin_c_cod'],
        );
    }

    public function vinTipo(): BelongsTo
    {
        return $this->belongsTo(
            VinTipo::class,
            ['vin_s_vin_c_cod', 'vin_s_vin_c_cod', 'vin_s_vin_t_cod', 'vin_s_vin_t_cod'],
            ['vin_t_vin_c_cod', 'vin_t_cod', 'vin_t_vin_c_cod', 'vin_t_cod'],
        );
    }
}
