<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ini extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ini_cod', 'ini_ing_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ing(): BelongsTo
    {
        return $this->belongsTo(
            Ing::class,
            ['ini_ing_cod'],
            ['ing_cod'],
        );
    }
}
