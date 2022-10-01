<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cce extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cce_lta_cod', 'cce_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gfc(): BelongsTo
    {
        return $this->belongsTo(
            Gfc::class,
            ['cce_gfc_num', 'cce_gfc_num', 'cce_lta_cod', 'cce_lta_cod'],
            ['gfc_num', 'gfc_lta_cod', 'gfc_num', 'gfc_lta_cod'],
        );
    }

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['cce_lta_cod'],
            ['lta_cod'],
        );
    }
}
