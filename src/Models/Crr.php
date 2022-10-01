<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Crr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['crr_sujidade', 'crr_mat_cod', 'crr_rrp_serie', 'crr_rrp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['crr_mat_cod'],
            ['mat_cod'],
        );
    }

    public function rrp(): BelongsTo
    {
        return $this->belongsTo(
            Rrp::class,
            ['crr_rrp_num', 'crr_rrp_num', 'crr_rrp_serie', 'crr_rrp_serie'],
            ['rrp_num', 'rrp_serie', 'rrp_num', 'rrp_serie'],
        );
    }
}
