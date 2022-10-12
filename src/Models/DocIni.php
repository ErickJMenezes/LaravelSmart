<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DocIni extends OracleEloquent
{
    use Compoships;

    protected $table = 'doc_ini';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['doc_i_ing_cod', 'doc_i_ini_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
