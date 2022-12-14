<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nan extends OracleEloquent
{
    use Compoships;

    protected $table = 'nan';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nan_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['nan_qst_cod'],
            ['qst_cod'],
        );
    }
}
