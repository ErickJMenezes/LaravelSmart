<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NexoExame extends OracleEloquent
{
    use Compoships;

    protected $table = 'nexo_exame';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nexo_exame_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nexoPsc(): BelongsTo
    {
        return $this->belongsTo(
            NexoPsc::class,
            ['nexo_exame_nexo_psc_id'],
            ['nexo_psc_id'],
        );
    }
}
