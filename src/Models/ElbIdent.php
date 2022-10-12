<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ElbIdent extends OracleEloquent
{
    use Compoships;

    protected $table = 'elb_ident';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['elb_i_equip_num', 'elb_i_elb_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function elb(): BelongsTo
    {
        return $this->belongsTo(
            Elb::class,
            ['elb_i_elb_cod'],
            ['elb_cod'],
        );
    }
}
