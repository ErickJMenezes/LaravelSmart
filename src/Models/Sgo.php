<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sgo extends OracleEloquent
{
    use Compoships;

    protected $table = 'sgo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sgo_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['sgo_cfo_cod'],
            ['cfo_cod'],
        );
    }
}
