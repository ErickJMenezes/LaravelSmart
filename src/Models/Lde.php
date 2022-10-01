<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lde extends OracleEloquent
{
    use Compoships;

    protected $table = 'lde';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lde_esp_cod', 'lde_mes'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['lde_esp_cod'],
            ['esp_cod'],
        );
    }
}
