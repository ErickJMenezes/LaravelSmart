<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ikp extends OracleEloquent
{
    use Compoships;

    protected $table = 'ikp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ikp_kpm_cod_barra', 'ikp_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function kpm(): BelongsTo
    {
        return $this->belongsTo(
            Kpm::class,
            ['ikp_kpm_cod_barra'],
            ['kpm_cod_barra'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['ikp_mat_cod'],
            ['mat_cod'],
        );
    }
}
