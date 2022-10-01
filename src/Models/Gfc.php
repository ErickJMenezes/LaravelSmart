<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gfc extends OracleEloquent
{
    use Compoships;

    protected $table = 'gfc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gfc_num', 'gfc_lta_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['gfc_lta_cod'],
            ['lta_cod'],
        );
    }
}
