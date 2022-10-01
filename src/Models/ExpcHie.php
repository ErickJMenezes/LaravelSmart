<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExpcHie extends OracleEloquent
{
    use Compoships;

    protected $table = 'expc_hie';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['expc_hie_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function expc(): BelongsTo
    {
        return $this->belongsTo(
            Expc::class,
            ['expc_hie_expc_cod'],
            ['expc_cod'],
        );
    }
}
