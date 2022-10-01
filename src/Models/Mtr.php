<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mtr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mtr_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['mtr_mot_cod', 'mtr_mot_cod', 'mtr_mot_tipo', 'mtr_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }
}
