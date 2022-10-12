<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AmbFav extends OracleEloquent
{
    use Compoships;

    protected $table = 'amb_fav';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['amb_f_tabela', 'amb_f_usr_login', 'amb_f_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
