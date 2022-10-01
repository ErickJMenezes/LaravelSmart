<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NanF extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['nan_f_nan_cod', 'nan_f_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nan(): BelongsTo
    {
        return $this->belongsTo(
            Nan::class,
            ['nan_f_nan_cod'],
            ['nan_cod'],
        );
    }
}
