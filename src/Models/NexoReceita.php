<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NexoReceita extends OracleEloquent
{
    use Compoships;

    protected $table = 'nexo_receita';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nexo_receita_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nexoPsc(): BelongsTo
    {
        return $this->belongsTo(
            NexoPsc::class,
            ['nexo_receita_nexo_psc_id'],
            ['nexo_psc_id'],
        );
    }
}
