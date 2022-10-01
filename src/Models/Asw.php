<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Asw extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['asw_guid'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['asw_usr_login'],
            ['usr_login'],
        );
    }
}
