<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DloOrp extends OracleEloquent
{
    use Compoships;

    protected $table = 'dlo_orp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dlo_o_orp_num', 'dlo_o_dlo_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dlo(): BelongsTo
    {
        return $this->belongsTo(
            Dlo::class,
            ['dlo_o_dlo_id'],
            ['dlo_id'],
        );
    }

    public function orp(): BelongsTo
    {
        return $this->belongsTo(
            Orp::class,
            ['dlo_o_orp_num'],
            ['orp_num'],
        );
    }
}
