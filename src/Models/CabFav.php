<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CabFav extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cab_f_psv_cod', 'cab_f_cab_nome'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['cab_f_psv_cod'],
            ['psv_cod'],
        );
    }
}
