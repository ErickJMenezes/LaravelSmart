<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Erc extends OracleEloquent
{
    use Compoships;

    protected $table = 'erc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['erc_yymm', 'erc_cod', 'erc_str_cod', 'erc_x'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['erc_str_cod'],
            ['str_cod'],
        );
    }
}
