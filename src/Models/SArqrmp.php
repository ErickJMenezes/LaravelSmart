<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SArqrmp extends OracleEloquent
{
    use Compoships;

    protected $table = 's_arqrmp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['s_mat', 's_proc'];

    protected $connection = 'smart';

    protected $guarded = [];
}
