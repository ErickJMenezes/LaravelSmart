<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SbaTpl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sba_t_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['sba_t_sba_cod'],
            ['sba_cod'],
        );
    }
}
