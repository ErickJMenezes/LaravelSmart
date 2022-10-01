<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rsd extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rsd_lsd_smk_cod', 'rsd_lsd_smk_tipo', 'rsd_lsd_numero', 'rsd_lsd_cnv_cod', 'rsd_valor_ini', 'rsd_esd_cod_sauded'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
