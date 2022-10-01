<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ocp extends OracleEloquent
{
    use Compoships;

    protected $table = 'ocp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ocp_str_cod', 'ocp_ano'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ocp_str_cod'],
            ['str_cod'],
        );
    }
}
