<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EpeStr extends OracleEloquent
{
    use Compoships;

    protected $table = 'epe_str';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['epe_s_str_cod', 'epe_s_epe_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function epe(): BelongsTo
    {
        return $this->belongsTo(
            Epe::class,
            ['epe_s_epe_cod'],
            ['epe_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['epe_s_str_cod'],
            ['str_cod'],
        );
    }
}
