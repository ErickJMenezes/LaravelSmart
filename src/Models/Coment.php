<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Coment extends OracleEloquent
{
    use Compoships;

    protected $table = 'coment';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['coment_tabela', 'coment_coluna'];

    protected $connection = 'smart';

    protected $guarded = [];
}
