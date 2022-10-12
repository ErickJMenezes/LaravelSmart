<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Atr extends OracleEloquent
{
    use Compoships;

    protected $table = 'atr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['atr_dsc', 'atr_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['atr_dsc'],
            ['dsc_cod'],
        );
    }
}
