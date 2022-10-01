<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fnd extends OracleEloquent
{
    use Compoships;

    protected $table = 'fnd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fnd_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['fnd_fne_cod'],
            ['fne_cod'],
        );
    }
}
