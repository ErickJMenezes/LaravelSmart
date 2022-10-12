<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nta extends OracleEloquent
{
    use Compoships;

    protected $table = 'nta';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nta_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['nta_fne_cod'],
            ['fne_cod'],
        );
    }
}
