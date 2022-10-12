<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class JrrLista extends OracleEloquent
{
    use Compoships;

    protected $table = 'jrr_lista';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['jrr_l_id', 'jrr_l_jrr_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function jrr(): BelongsTo
    {
        return $this->belongsTo(
            Jrr::class,
            ['jrr_l_jrr_id'],
            ['jrr_id'],
        );
    }
}
