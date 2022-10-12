<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RhpRepasse extends OracleEloquent
{
    use Compoships;

    protected $table = 'rhp_repasse';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rhp_str_cod', 'rhp_emp_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
