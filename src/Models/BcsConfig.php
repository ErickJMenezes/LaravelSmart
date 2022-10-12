<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BcsConfig extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcs_config';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcs_config_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['bcs_config_gcc_cod'],
            ['gcc_cod'],
        );
    }
}
