<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntFinx extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ent_finx_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function entFin(): BelongsTo
    {
        return $this->belongsTo(
            EntFin::class,
            ['ent_finx_fin_id'],
            ['ent_fin_id'],
        );
    }

    public function ent(): BelongsTo
    {
        return $this->belongsTo(
            Ent::class,
            ['ent_finx_ent_cod'],
            ['ent_id'],
        );
    }
}
