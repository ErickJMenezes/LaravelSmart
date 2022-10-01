<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hcc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hcc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hccs(): HasMany
    {
        return $this->hasMany(
            Hcc::class,
            ['hcc_cod'],
            ['hcc_hcc_cod'],
        );
    }
}
