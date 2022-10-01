<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lgi extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lgi_dthr', 'lgi_usi_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usi(): BelongsTo
    {
        return $this->belongsTo(
            Usi::class,
            ['lgi_usi_login'],
            ['usi_login'],
        );
    }
}
