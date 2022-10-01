<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sli extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sld(): BelongsTo
    {
        return $this->belongsTo(
            Sld::class,
            ['sli_sld_num', 'sli_sld_num', 'sli_sld_serie', 'sli_sld_serie'],
            ['sld_num', 'sld_serie', 'sld_num', 'sld_serie'],
        );
    }
}
