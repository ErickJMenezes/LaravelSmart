<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntEco extends OracleEloquent
{
    use Compoships;

    protected $table = 'ent_eco';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ent_eco_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function eco(): BelongsTo
    {
        return $this->belongsTo(
            Eco::class,
            ['ent_eco_eco_id'],
            ['eco_id'],
        );
    }

    public function ent(): BelongsTo
    {
        return $this->belongsTo(
            Ent::class,
            ['ent_eco_ent_id'],
            ['ent_id'],
        );
    }
}
