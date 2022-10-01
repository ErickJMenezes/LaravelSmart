<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NexoDoc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['nexo_doc_id', 'nexo_doc_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nexoPsc(): BelongsTo
    {
        return $this->belongsTo(
            NexoPsc::class,
            ['nexo_doc_id'],
            ['nexo_psc_id'],
        );
    }
}
