<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SbaHor extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sba_h_hr_atual_ini', 'sba_h_sba_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['sba_h_sba_cod'],
            ['sba_cod'],
        );
    }
}
