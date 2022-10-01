<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SldFile extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sld_f_serie', 'sld_f_num', 'sld_f_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sld(): BelongsTo
    {
        return $this->belongsTo(
            Sld::class,
            ['sld_f_num', 'sld_f_num', 'sld_f_serie', 'sld_f_serie'],
            ['sld_num', 'sld_serie', 'sld_num', 'sld_serie'],
        );
    }
}
