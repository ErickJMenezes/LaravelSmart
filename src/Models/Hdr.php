<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hdr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hdr_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hdrs(): HasMany
    {
        return $this->hasMany(
            Hdr::class,
            ['hdr_cod'],
            ['hdr_hdr_cod'],
        );
    }
}
