<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bol extends OracleEloquent
{
    use Compoships;

    protected $table = 'bol';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bol_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nwa(): BelongsTo
    {
        return $this->belongsTo(
            Nwa::class,
            ['bol_nwa_id_env', 'bol_nwa_id_rec'],
            ['nwa_id', 'nwa_id'],
        );
    }

    public function vll(): BelongsTo
    {
        return $this->belongsTo(
            Vll::class,
            ['bol_vll_cod'],
            ['vll_cod'],
        );
    }
}
