<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Iga extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['iga_gal_cod', 'iga_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gal(): BelongsTo
    {
        return $this->belongsTo(
            Gal::class,
            ['iga_gal_cod'],
            ['gal_cod'],
        );
    }
}
