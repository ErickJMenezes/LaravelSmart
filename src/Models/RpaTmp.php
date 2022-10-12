<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RpaTmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpa_tmp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rpa_qst_cod', 'rpa_apq_cod', 'rpa_pgt_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
