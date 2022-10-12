<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntIns extends OracleEloquent
{
    use Compoships;

    protected $table = 'ent_ins';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ent_ins_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ins(): BelongsTo
    {
        return $this->belongsTo(
            Ins::class,
            ['ent_ins_ins_id'],
            ['ins_id'],
        );
    }

    public function ent(): BelongsTo
    {
        return $this->belongsTo(
            Ent::class,
            ['ent_ins_ent_id'],
            ['ent_id'],
        );
    }
}
