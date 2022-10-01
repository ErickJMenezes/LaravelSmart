<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pat extends OracleEloquent
{
    use Compoships;

    protected $table = 'pat';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pat_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['pat_dsc_cod'],
            ['dsc_cod'],
        );
    }
}
