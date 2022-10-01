<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tab extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['tab_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['tab_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function tme(): BelongsTo
    {
        return $this->belongsTo(
            Tme::class,
            ['tab_tme_cod'],
            ['tme_cod'],
        );
    }
}
