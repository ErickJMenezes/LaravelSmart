<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RtrPac extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rtr_pac_pac_reg', 'rtr_pac_rtr_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['rtr_pac_pac_reg'],
            ['pac_reg'],
        );
    }
}
