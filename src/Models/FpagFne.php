<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class FpagFne extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fpag_fne_form_pag'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
