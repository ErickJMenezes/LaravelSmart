<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmlAnx extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['e_anx_img_cod', 'e_anx_eml_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
