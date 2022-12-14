<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cbm extends OracleEloquent
{
    use Compoships;

    protected $table = 'cbm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cbm_mat_cod', 'cbm_cod_barra'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['cbm_mat_cod'],
            ['mat_cod'],
        );
    }
}
