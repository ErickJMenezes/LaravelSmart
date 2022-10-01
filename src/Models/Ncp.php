<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ncp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ncp_cop_num', 'ncp_nta_cod', 'ncp_cop_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cop(): BelongsTo
    {
        return $this->belongsTo(
            Cop::class,
            ['ncp_cop_num', 'ncp_cop_num', 'ncp_cop_serie', 'ncp_cop_serie'],
            ['cop_num', 'cop_serie', 'cop_num', 'cop_serie'],
        );
    }

    public function nta(): BelongsTo
    {
        return $this->belongsTo(
            Nta::class,
            ['ncp_nta_cod'],
            ['nta_cod'],
        );
    }
}
