<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cdg extends OracleEloquent
{
    use Compoships;

    protected $table = 'cdg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cdg_serie', 'cdg_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cax(): BelongsTo
    {
        return $this->belongsTo(
            Cax::class,
            ['cdg_cax_id'],
            ['cax_id'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['cdg_pac_reg'],
            ['pac_reg'],
        );
    }
}
