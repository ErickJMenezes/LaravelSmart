<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gfp extends OracleEloquent
{
    use Compoships;

    protected $table = 'gfp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gfp_lta_cod', 'gfp_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['gfp_lta_cod'],
            ['lta_cod'],
        );
    }
}
