<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class UsuE642lct extends OracleEloquent
{
    use Compoships;

    protected $table = 'usu_e642lct';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['seqid', 'codseg', 'idint'];

    protected $connection = 'smart';

    protected $guarded = [];
}
