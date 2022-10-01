<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lwl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lwl_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lwl_usr_login'],
            ['usr_login'],
        );
    }

    public function nwa(): BelongsTo
    {
        return $this->belongsTo(
            Nwa::class,
            ['lwl_nwa_id_envio', 'lwl_nwa_id_retorno'],
            ['nwa_id', 'nwa_id'],
        );
    }
}
