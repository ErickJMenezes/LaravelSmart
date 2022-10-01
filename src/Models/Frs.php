<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Frs extends OracleEloquent
{
    use Compoships;

    protected $table = 'frs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['frs_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function elb(): BelongsTo
    {
        return $this->belongsTo(
            Elb::class,
            ['frs_elb_cod'],
            ['elb_cod'],
        );
    }
}
