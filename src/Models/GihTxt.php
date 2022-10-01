<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GihTxt extends OracleEloquent
{
    use Compoships;

    protected $table = 'gih_txt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gih_t_dthr_reg', 'gih_t_gih_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
