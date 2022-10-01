<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class UsuE210mvp extends OracleEloquent
{
    use Compoships;

    protected $table = 'usu_e210mvp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pksmart'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
