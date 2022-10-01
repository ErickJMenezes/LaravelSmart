<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rls extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rls_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function grr(): BelongsTo
    {
        return $this->belongsTo(
            Grr::class,
            ['rls_grr_cod'],
            ['grr_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rls_usr_cria', 'rls_usr_altera', 'rls_usr_emite'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }
}
