<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImcAmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'imc_amp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['imc_amp_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function rcl(): BelongsTo
    {
        return $this->belongsTo(
            Rcl::class,
            ['imc_amp_rcl_dthr', 'imc_amp_rcl_dthr', 'imc_amp_rcl_dthr', 'imc_amp_rcl_dthr', 'imc_amp_rcl_cod', 'imc_amp_rcl_cod', 'imc_amp_rcl_cod', 'imc_amp_rcl_cod', 'imc_amp_rcl_tpcod', 'imc_amp_rcl_tpcod', 'imc_amp_rcl_tpcod', 'imc_amp_rcl_tpcod', 'imc_amp_rcl_pac', 'imc_amp_rcl_pac', 'imc_amp_rcl_pac', 'imc_amp_rcl_pac'],
            ['rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac'],
        );
    }
}
