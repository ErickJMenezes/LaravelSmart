<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sga extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sga_gal_cod', 'sga_str_solic'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gal(): BelongsTo
    {
        return $this->belongsTo(
            Gal::class,
            ['sga_gal_cod'],
            ['gal_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['sga_str_solic'],
            ['str_cod'],
        );
    }
}
