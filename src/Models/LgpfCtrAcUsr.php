<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LgpfCtrAcUsr extends OracleEloquent
{
    use Compoships;

    protected $table = 'lgpf_ctr_ac_usr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lgpd_cau_usr_login'];

    protected $connection = 'smart';

    protected $guarded = [];
}
