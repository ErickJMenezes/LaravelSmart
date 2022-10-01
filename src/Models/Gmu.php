<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gmu extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['gmu_gmt_cod', 'gmu_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gmt(): BelongsTo
    {
        return $this->belongsTo(
            Gmt::class,
            ['gmu_gmt_cod'],
            ['gmt_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['gmu_usr_login'],
            ['usr_login'],
        );
    }
}
