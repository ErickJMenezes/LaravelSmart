<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MaqCielo extends OracleEloquent
{
    use Compoships;

    protected $table = 'maq_cielo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['maq_c_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['maq_c_str'],
            ['str_cod'],
        );
    }
}
