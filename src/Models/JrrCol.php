<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class JrrCol extends OracleEloquent
{
    use Compoships;

    protected $table = 'jrr_col';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['jrr_c_jrr_id', 'jrr_c_tabela', 'jrr_c_coluna'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function jrr(): BelongsTo
    {
        return $this->belongsTo(
            Jrr::class,
            ['jrr_c_jrr_id'],
            ['jrr_id'],
        );
    }
}
