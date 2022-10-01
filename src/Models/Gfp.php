<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gfp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['gfp_lta_cod', 'gfp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['gfp_lta_cod'],
            ['lta_cod'],
        );
    }
}
