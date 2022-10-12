<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LocEsp extends OracleEloquent
{
    use Compoships;

    protected $table = 'loc_esp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['loc_e_esp_cod', 'loc_e_loc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['loc_e_esp_cod'],
            ['esp_cod'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['loc_e_loc_cod'],
            ['loc_cod'],
        );
    }
}
