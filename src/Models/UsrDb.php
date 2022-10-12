<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class UsrDb extends OracleEloquent
{
    use Compoships;

    protected $table = 'usr_db';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['db_destino', 'usr_login_origem', 'db_origem'];

    protected $connection = 'smart';

    protected $guarded = [];
}
