<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mic extends OracleEloquent
{
    use Compoships;

    protected $table = 'mic';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mic_cod', 'mic_cnv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['mic_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
