<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ars extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ars_rls_cod', 'ars_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ars_usr_login'],
            ['usr_login'],
        );
    }

    public function rls(): BelongsTo
    {
        return $this->belongsTo(
            Rls::class,
            ['ars_rls_cod'],
            ['rls_cod'],
        );
    }
}