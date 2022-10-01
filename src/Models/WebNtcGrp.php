<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class WebNtcGrp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['grp_cod', 'ntc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function grp(): BelongsTo
    {
        return $this->belongsTo(
            Grp::class,
            ['grp_cod'],
            ['grp_cod'],
        );
    }

    public function webNtc(): BelongsTo
    {
        return $this->belongsTo(
            WebNtc::class,
            ['ntc_id'],
            ['ntc_id'],
        );
    }
}
