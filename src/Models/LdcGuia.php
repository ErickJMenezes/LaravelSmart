<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LdcGuia extends OracleEloquent
{
    use Compoships;

    protected $table = 'ldc_guia';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ldc_guia_ldn_id', 'ldc_guia_cid_cod', 'ldc_guia_dthr_ini', 'ldc_guia_pac_reg', 'ldc_guia_cid_tip'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
