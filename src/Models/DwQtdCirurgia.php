<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwQtdCirurgia extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_qtd_cirurgia';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_qtd_cirurgia_mmyy', 'dw_qtd_cirurgia_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
