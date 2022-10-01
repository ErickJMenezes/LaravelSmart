<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LipSta extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function lip(): BelongsTo
    {
        return $this->belongsTo(
            Lip::class,
            ['lip_sta_lip_id'],
            ['lip_id'],
        );
    }

    public function fms(): BelongsTo
    {
        return $this->belongsTo(
            Fms::class,
            ['lip_sta_fms_id'],
            ['fms_id'],
        );
    }
}
