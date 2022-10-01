<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntIst extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ent_ist_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ent(): BelongsTo
    {
        return $this->belongsTo(
            Ent::class,
            ['ent_ist_ent_id'],
            ['ent_id'],
        );
    }

    public function ist(): BelongsTo
    {
        return $this->belongsTo(
            Ist::class,
            ['ent_ist_ist_id'],
            ['ist_id'],
        );
    }
}
