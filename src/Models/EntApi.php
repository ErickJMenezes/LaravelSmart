<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntApi extends OracleEloquent
{
    use Compoships;

    protected $table = 'ent_api';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ent_api_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ent(): BelongsTo
    {
        return $this->belongsTo(
            Ent::class,
            ['ent_api_ent_id'],
            ['ent_id'],
        );
    }

    public function api(): BelongsTo
    {
        return $this->belongsTo(
            Api::class,
            ['ent_api_api_id'],
            ['api_id'],
        );
    }
}
