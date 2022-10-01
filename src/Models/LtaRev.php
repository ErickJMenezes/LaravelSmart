<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LtaRev extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lta_r_id', 'lta_r_lta_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['lta_r_lta_cod'],
            ['lta_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lta_r_usr_login'],
            ['usr_login'],
        );
    }
}
