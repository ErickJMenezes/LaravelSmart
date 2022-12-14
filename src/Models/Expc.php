<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Expc extends OracleEloquent
{
    use Compoships;

    protected $table = 'expc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['expc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function dwo(): BelongsTo
    {
        return $this->belongsTo(
            Dwo::class,
            ['expc_dwo_id'],
            ['dwo_id'],
        );
    }
}
