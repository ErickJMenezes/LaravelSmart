<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RpiCpgPsv extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpi_cpg_psv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rpi_cpg_psv_rpi_serie', 'rpi_cpg_psv_psv_cod', 'rpi_cpg_psv_rpi_num'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
