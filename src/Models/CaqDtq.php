<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CaqDtq extends OracleEloquent
{
    use Compoships;

    protected $table = 'caq_dtq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['caq_d_dthr', 'caq_d_caq_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function caq(): BelongsTo
    {
        return $this->belongsTo(
            Caq::class,
            ['caq_d_caq_id'],
            ['caq_id'],
        );
    }
}
