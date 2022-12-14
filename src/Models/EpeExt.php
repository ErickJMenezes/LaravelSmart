<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EpeExt extends OracleEloquent
{
    use Compoships;

    protected $table = 'epe_ext';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['epe_e_epe_cod', 'epe_e_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function epe(): BelongsTo
    {
        return $this->belongsTo(
            Epe::class,
            ['epe_e_epe_cod'],
            ['epe_cod'],
        );
    }
}
