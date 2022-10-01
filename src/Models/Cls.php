<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cls extends OracleEloquent
{
    use Compoships;

    protected $table = 'cls';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cls_competencia', 'cls_sus_cod_unico', 'cls_apac_srv', 'cls_apac_csf'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
