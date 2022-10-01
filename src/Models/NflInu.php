<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NflInu extends OracleEloquent
{
    use Compoships;

    protected $table = 'nfl_inu';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nfl_inu_num', 'nfl_inu_serie', 'nfl_inu_emp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
