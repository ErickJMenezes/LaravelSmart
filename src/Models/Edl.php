<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Edl extends OracleEloquent
{
    use Compoships;

    protected $table = 'edl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['edl_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['edl_destino_str_cod'],
            ['str_cod'],
        );
    }

    public function edls(): HasMany
    {
        return $this->hasMany(
            Edl::class,
            ['edl_cod'],
            ['edl_pos_prazo_edl_cod'],
        );
    }

    public function ged(): BelongsTo
    {
        return $this->belongsTo(
            Ged::class,
            ['edl_ged_cod'],
            ['ged_cod'],
        );
    }

    public function sat(): BelongsTo
    {
        return $this->belongsTo(
            Sat::class,
            ['edl_sat_cod'],
            ['sat_cod'],
        );
    }
}
