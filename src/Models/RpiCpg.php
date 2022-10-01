<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RpiCpg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rpi_c_ccr_cod', 'rpi_c_rpi_num', 'rpi_c_rpi_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['rpi_c_ccr_cod'],
            ['ccr_cod'],
        );
    }

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['rpi_c_cpg_num', 'rpi_c_cpg_num', 'rpi_c_cpg_serie', 'rpi_c_cpg_serie'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }

    public function rpi(): BelongsTo
    {
        return $this->belongsTo(
            Rpi::class,
            ['rpi_c_rpi_num', 'rpi_c_rpi_num', 'rpi_c_rpi_serie', 'rpi_c_rpi_serie'],
            ['rpi_num', 'rpi_serie', 'rpi_num', 'rpi_serie'],
        );
    }
}
