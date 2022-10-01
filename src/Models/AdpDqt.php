<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class AdpDqt extends OracleEloquent
{
    use Compoships;

    protected $table = 'adp_dqt';

    public $timestamps = false;

    public $incrementing = false;

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
