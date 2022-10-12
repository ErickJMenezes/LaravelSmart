<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class JrrJoin extends OracleEloquent
{
    use Compoships;

    protected $table = 'jrr_join';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['jrr_j_id', 'jrr_j_jrr_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function jrr(): BelongsTo
    {
        return $this->belongsTo(
            Jrr::class,
            ['jrr_j_jrr_id'],
            ['jrr_id'],
        );
    }
}
