<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rse extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rse_num', 'rse_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rse_usr_login', 'rse_usr_login_canc'],
            ['usr_login', 'usr_login'],
        );
    }

    public function rot(): BelongsTo
    {
        return $this->belongsTo(
            Rot::class,
            ['rse_rot_cod'],
            ['rot_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rse_str_cod'],
            ['str_cod'],
        );
    }
}
