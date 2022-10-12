<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MnaOcr extends OracleEloquent
{
    use Compoships;

    protected $table = 'mna_ocr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mna_o_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
