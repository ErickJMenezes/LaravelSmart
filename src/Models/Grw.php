<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Grw extends OracleEloquent
{
    use Compoships;

    protected $table = 'grw';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['grw_guid'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function grSes(): BelongsTo
    {
        return $this->belongsTo(
            GrSes::class,
            ['grw_gr_ses_id'],
            ['gr_ses_id'],
        );
    }
}
