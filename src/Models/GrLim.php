<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GrLim extends OracleEloquent
{
    use Compoships;

    protected $table = 'gr_lim';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gr_lim_str_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['gr_lim_str_cod'],
            ['str_cod'],
        );
    }
}
