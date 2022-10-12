<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Kpm extends OracleEloquent
{
    use Compoships;

    protected $table = 'kpm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['kpm_cod_barra'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function kmt(): BelongsTo
    {
        return $this->belongsTo(
            Kmt::class,
            ['kpm_kmt_cod'],
            ['kmt_cod'],
        );
    }
}
