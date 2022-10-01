<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntCri extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ent_cri_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cri(): BelongsTo
    {
        return $this->belongsTo(
            Cri::class,
            ['ent_cri_cri_cod'],
            ['cri_id'],
        );
    }

    public function ent(): BelongsTo
    {
        return $this->belongsTo(
            Ent::class,
            ['ent_cri_ent_cod'],
            ['ent_id'],
        );
    }
}
