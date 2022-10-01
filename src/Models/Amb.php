<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Amb extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['amb_cod', 'amb_tabela'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['amb_tabela'],
            ['tab_cod'],
        );
    }
}
