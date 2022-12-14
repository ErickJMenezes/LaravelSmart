<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tde extends OracleEloquent
{
    use Compoships;

    protected $table = 'tde';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tde_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function dwo(): BelongsTo
    {
        return $this->belongsTo(
            Dwo::class,
            ['tde_dwo_id'],
            ['dwo_id'],
        );
    }
}
