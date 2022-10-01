<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntAtrativo extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ent_atrativo_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ent(): BelongsTo
    {
        return $this->belongsTo(
            Ent::class,
            ['ent_atrativo_ent_id'],
            ['ent_id'],
        );
    }
}
