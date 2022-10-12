<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Obs extends OracleEloquent
{
    use Compoships;

    protected $table = 'obs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['obs_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['obs_edl_cod'],
            ['edl_cod'],
        );
    }
}
