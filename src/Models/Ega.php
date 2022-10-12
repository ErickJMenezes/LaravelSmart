<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ega extends OracleEloquent
{
    use Compoships;

    protected $table = 'ega';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ega_eti_cod', 'ega_gal_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function eti(): BelongsTo
    {
        return $this->belongsTo(
            Eti::class,
            ['ega_eti_cod'],
            ['eti_cod'],
        );
    }

    public function gal(): BelongsTo
    {
        return $this->belongsTo(
            Gal::class,
            ['ega_gal_cod'],
            ['gal_cod'],
        );
    }
}
