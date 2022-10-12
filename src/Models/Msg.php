<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Msg extends OracleEloquent
{
    use Compoships;

    protected $table = 'msg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['msg_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function fdl(): BelongsTo
    {
        return $this->belongsTo(
            Fdl::class,
            ['msg_fdl_id'],
            ['fdl_id'],
        );
    }
}
