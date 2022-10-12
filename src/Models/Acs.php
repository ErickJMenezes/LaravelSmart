<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Acs extends OracleEloquent
{
    use Compoships;

    protected $table = 'acs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['acs_grp_cod', 'acs_fnc_cod'];

    protected $connection = 'smart';

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
