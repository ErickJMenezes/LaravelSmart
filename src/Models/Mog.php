<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mog extends OracleEloquent
{
    use Compoships;

    protected $table = 'mog';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mog_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gmg(): BelongsTo
    {
        return $this->belongsTo(
            Gmg::class,
            ['mog_gmg_cod'],
            ['gmg_cod'],
        );
    }

    public function sgo(): BelongsTo
    {
        return $this->belongsTo(
            Sgo::class,
            ['mog_sgo_cod'],
            ['sgo_cod'],
        );
    }
}
