<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hrl extends OracleEloquent
{
    use Compoships;

    protected $table = 'hrl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hrl_dia', 'hrl_loc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['hrl_loc_cod'],
            ['loc_cod'],
        );
    }
}
