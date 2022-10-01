<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TmpQtEtq extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['tmp_qt_etq_ctf_tipo', 'tmp_qt_etq_id', 'tmp_qt_etq_ctf_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
