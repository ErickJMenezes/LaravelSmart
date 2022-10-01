<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ItmCct extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['itm_tme_cod', 'itm_c_cod_estrut'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function tme(): BelongsTo
    {
        return $this->belongsTo(
            Tme::class,
            ['itm_tme_cod'],
            ['tme_cod'],
        );
    }
}
