<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LgpfCtrAcUsr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lgpd_cau_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
