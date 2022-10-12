<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sot extends OracleEloquent
{
    use Compoships;

    protected $table = 'sot';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sot_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['sot_gcc_cod'],
            ['gcc_cod'],
        );
    }
}
