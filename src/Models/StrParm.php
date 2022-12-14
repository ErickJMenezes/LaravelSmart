<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class StrParm extends OracleEloquent
{
    use Compoships;

    protected $table = 'str_parm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['str_p_id', 'str_p_str_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
