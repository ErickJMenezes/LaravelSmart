<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MatStr extends OracleEloquent
{
    use Compoships;

    protected $table = 'mat_str';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mat_str_mat_cod', 'mat_str_str_cod', 'mat_str_sba_cod', 'mat_str_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['mat_str_mat_cod'],
            ['mat_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['mat_str_str_cod'],
            ['str_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['mat_str_sba_cod'],
            ['sba_cod'],
        );
    }
}
