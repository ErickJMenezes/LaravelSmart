<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Irs extends OracleEloquent
{
    use Compoships;

    protected $table = 'irs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['irs_str_cod', 'irs_rse_serie', 'irs_rse_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function rse(): BelongsTo
    {
        return $this->belongsTo(
            Rse::class,
            ['irs_rse_num', 'irs_rse_num', 'irs_rse_serie', 'irs_rse_serie'],
            ['rse_num', 'rse_serie', 'rse_num', 'rse_serie'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['irs_str_cod'],
            ['str_cod'],
        );
    }
}
