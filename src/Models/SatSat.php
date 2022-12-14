<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SatSat extends OracleEloquent
{
    use Compoships;

    protected $table = 'sat_sat';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sat_s_sat_cod_origem', 'sat_s_sat_cod_superior'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sat(): BelongsTo
    {
        return $this->belongsTo(
            Sat::class,
            ['sat_s_sat_cod_origem', 'sat_s_sat_cod_superior'],
            ['sat_cod', 'sat_cod'],
        );
    }
}
