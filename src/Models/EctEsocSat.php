<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EctEsocSat extends OracleEloquent
{
    use Compoships;

    protected $table = 'ect_esoc_sat';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ect_esoc_sat_ect_numero', 'ect_esoc_sat_esoc_sat_cod', 'ect_esoc_sat_ect_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function esocSat(): BelongsTo
    {
        return $this->belongsTo(
            EsocSat::class,
            ['ect_esoc_sat_esoc_sat_cod'],
            ['esoc_sat_cod'],
        );
    }
}
