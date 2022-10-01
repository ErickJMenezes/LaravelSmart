<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Det extends OracleEloquent
{
    use Compoships;

    protected $table = 'det';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['det_desc', 'det_eti_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function eti(): BelongsTo
    {
        return $this->belongsTo(
            Eti::class,
            ['det_eti_cod'],
            ['eti_cod'],
        );
    }
}
