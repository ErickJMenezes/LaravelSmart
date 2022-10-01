<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EExt extends OracleEloquent
{
    use Compoships;

    protected $table = 'e_ext';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['e_ext_rep_num', 'e_ext_rep_serie', 'e_ext_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
