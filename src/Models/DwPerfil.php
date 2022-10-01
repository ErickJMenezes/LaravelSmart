<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwPerfil extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_perfil_nome', 'dw_perfil_usr_login', 'dw_perfil_tipo', 'dw_perfil_atributo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
