<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lda extends OracleEloquent
{
    use Compoships;

    protected $table = 'lda';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lda_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['lda_sap_cod'],
            ['sap_cod'],
        );
    }
}
