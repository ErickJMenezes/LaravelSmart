<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Isr extends OracleEloquent
{
    use Compoships;

    protected $table = 'isr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['isr_srf_serie', 'isr_srf_num', 'isr_srf_seq'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cdp(): BelongsTo
    {
        return $this->belongsTo(
            Cdp::class,
            ['isr_cdp_id'],
            ['cdp_id'],
        );
    }

    public function srf(): BelongsTo
    {
        return $this->belongsTo(
            Srf::class,
            ['isr_srf_num', 'isr_srf_num', 'isr_srf_serie', 'isr_srf_serie'],
            ['srf_num', 'srf_serie', 'srf_num', 'srf_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['isr_usr_login_libera'],
            ['usr_login'],
        );
    }
}
