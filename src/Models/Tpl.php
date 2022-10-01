<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tpl extends OracleEloquent
{
    use Compoships;

    protected $table = 'tpl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tpl_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['tpl_str_solic'],
            ['str_cod'],
        );
    }
}
