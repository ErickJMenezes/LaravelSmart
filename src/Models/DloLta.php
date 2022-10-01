<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DloLta extends OracleEloquent
{
    use Compoships;

    protected $table = 'dlo_lta';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dlo_l_lta_cod', 'dlo_l_dlo_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dlo(): BelongsTo
    {
        return $this->belongsTo(
            Dlo::class,
            ['dlo_l_dlo_id'],
            ['dlo_id'],
        );
    }

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['dlo_l_lta_cod'],
            ['lta_cod'],
        );
    }
}
