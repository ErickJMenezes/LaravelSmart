<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class UsuE080ser extends OracleEloquent
{
    use Compoships;

    protected $table = 'usu_e080ser';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pksmart'];

    protected $connection = 'smart';

    protected $guarded = [];
}
