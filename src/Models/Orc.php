<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Orc extends OracleEloquent
{
    use Compoships;

    protected $table = 'orc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['orc_umo_cod', 'orc_ind_terc', 'orc_terc_str_cod', 'orc_ano', 'orc_cfo_cod', 'orc_str_cod', 'orc_sintetico'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['orc_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['orc_str_cod'],
            ['str_cod'],
        );
    }

    public function umo(): BelongsTo
    {
        return $this->belongsTo(
            Umo::class,
            ['orc_umo_cod'],
            ['umo_sigla'],
        );
    }
}
