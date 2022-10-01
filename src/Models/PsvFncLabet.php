<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvFncLabet extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv_fnc_labet';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['p_fnc_psv_cod', 'p_fnc_fnc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['p_fnc_psv_cod'],
            ['psv_cod'],
        );
    }

    public function fnc(): BelongsTo
    {
        return $this->belongsTo(
            Fnc::class,
            ['p_fnc_fnc_cod'],
            ['fnc_cod'],
        );
    }
}
