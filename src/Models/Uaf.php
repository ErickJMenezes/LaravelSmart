<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Uaf extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['uaf_fnc_cod', 'uaf_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fnc(): BelongsTo
    {
        return $this->belongsTo(
            Fnc::class,
            ['uaf_fnc_cod'],
            ['fnc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['uaf_usr_login'],
            ['usr_login'],
        );
    }
}
