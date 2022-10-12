<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ccc extends OracleEloquent
{
    use Compoships;

    protected $table = 'ccc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ccc_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['ccc_cct_cod'],
            ['cct_cod'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['ccc_cfo_cod'],
            ['cfo_cod'],
        );
    }
}
