<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ltd extends OracleEloquent
{
    use Compoships;

    protected $table = 'ltd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ltd_mes_ref', 'ltd_loc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['ltd_loc_cod'],
            ['loc_cod'],
        );
    }
}
