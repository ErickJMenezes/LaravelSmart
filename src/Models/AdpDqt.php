<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AdpDqt extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['adp_d_dia', 'adp_d_adp_tipo', 'adp_d_adp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['adp_d_adp_cod', 'adp_d_adp_cod', 'adp_d_adp_tipo', 'adp_d_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }
}
