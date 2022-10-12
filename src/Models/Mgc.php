<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mgc extends OracleEloquent
{
    use Compoships;

    protected $table = 'mgc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mgc_mog_cod', 'mgc_cnv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['mgc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function mog(): BelongsTo
    {
        return $this->belongsTo(
            Mog::class,
            ['mgc_mog_cod'],
            ['mog_cod'],
        );
    }
}
