<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Def extends OracleEloquent
{
    use Compoships;

    protected $table = 'def';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['def_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['def_gcc_cod'],
            ['gcc_cod'],
        );
    }
}
