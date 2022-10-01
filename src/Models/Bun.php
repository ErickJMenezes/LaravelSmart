<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bun extends OracleEloquent
{
    use Compoships;

    protected $table = 'bun';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bun_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function unm(): BelongsTo
    {
        return $this->belongsTo(
            Unm::class,
            ['bun_unm_cod'],
            ['unm_cod'],
        );
    }
}
