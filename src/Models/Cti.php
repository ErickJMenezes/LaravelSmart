<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cti extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cti_atv_cod', 'cti_cde_cod', 'cti_cod_trib'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function atv(): BelongsTo
    {
        return $this->belongsTo(
            Atv::class,
            ['cti_atv_cod'],
            ['atv_cod'],
        );
    }

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['cti_cde_cod'],
            ['cde_cod'],
        );
    }
}
