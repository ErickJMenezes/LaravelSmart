<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NanAha extends OracleEloquent
{
    use Compoships;

    protected $table = 'nan_aha';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nan_a_aha_cod', 'nan_a_nan_cod', 'nan_a_aha_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function aha(): BelongsTo
    {
        return $this->belongsTo(
            Aha::class,
            ['nan_a_aha_cod', 'nan_a_aha_cod', 'nan_a_aha_tipo', 'nan_a_aha_tipo'],
            ['aha_cod', 'aha_tipo', 'aha_cod', 'aha_tipo'],
        );
    }

    public function nan(): BelongsTo
    {
        return $this->belongsTo(
            Nan::class,
            ['nan_a_nan_cod'],
            ['nan_cod'],
        );
    }
}
