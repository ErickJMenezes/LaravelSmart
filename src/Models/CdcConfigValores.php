<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CdcConfigValores extends OracleEloquent
{
    use Compoships;

    protected $table = 'cdc_config_valores';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cdcConfig(): BelongsTo
    {
        return $this->belongsTo(
            CdcConfig::class,
            ['cdc_config_cod'],
            ['cdc_config_cod'],
        );
    }
}
