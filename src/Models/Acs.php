<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Acs extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['acs_grp_cod', 'acs_fnc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fnc(): BelongsTo
    {
        return $this->belongsTo(
            Fnc::class,
            ['acs_fnc_cod'],
            ['fnc_cod'],
        );
    }

    public function grp(): BelongsTo
    {
        return $this->belongsTo(
            Grp::class,
            ['acs_grp_cod'],
            ['grp_cod'],
        );
    }
}
