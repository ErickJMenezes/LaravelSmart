<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rdp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rdp_smk_cod', 'rdp_smk_tipo', 'rdp_dsc_cod', 'rdp_atr_num'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
