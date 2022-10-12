<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cpu extends OracleEloquent
{
    use Compoships;

    protected $table = 'cpu';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cpu_cnv_cod', 'cpu_str_solic', 'cpu_gcc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cpu_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['cpu_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cpu_str_solic'],
            ['str_cod'],
        );
    }
}
