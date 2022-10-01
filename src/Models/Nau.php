<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nau extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['nau_nta_cod', 'nau_aft_num', 'nau_aft_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function aft(): BelongsTo
    {
        return $this->belongsTo(
            Aft::class,
            ['nau_aft_num', 'nau_aft_num', 'nau_aft_serie', 'nau_aft_serie'],
            ['aft_num', 'aft_serie', 'aft_num', 'aft_serie'],
        );
    }

    public function nta(): BelongsTo
    {
        return $this->belongsTo(
            Nta::class,
            ['nau_nta_cod'],
            ['nta_cod'],
        );
    }
}