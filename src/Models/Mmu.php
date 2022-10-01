<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mmu extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mmu_cod', 'mmu_psv_cod', 'mmu_tip'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
