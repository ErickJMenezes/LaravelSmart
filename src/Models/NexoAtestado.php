<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NexoAtestado extends OracleEloquent
{
    use Compoships;

    protected $table = 'nexo_atestado';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nexo_atestado_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nexoPsc(): BelongsTo
    {
        return $this->belongsTo(
            NexoPsc::class,
            ['nexo_atestado_nexo_psc_id'],
            ['nexo_psc_id'],
        );
    }
}
