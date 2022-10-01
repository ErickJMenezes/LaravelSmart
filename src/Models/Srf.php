<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Srf extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['srf_serie', 'srf_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['srf_str_solic', 'srf_str_exec'],
            ['str_cod', 'str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['srf_usr_login'],
            ['usr_login'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['srf_pac_reg'],
            ['pac_reg'],
        );
    }
}
