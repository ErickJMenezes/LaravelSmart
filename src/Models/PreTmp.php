<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PreTmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'pre_tmp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pre_smk_tipo', 'pre_tab_cod', 'pre_smk_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
