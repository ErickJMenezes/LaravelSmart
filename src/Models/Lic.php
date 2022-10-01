<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lic extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lic_commid'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function elb(): BelongsTo
    {
        return $this->belongsTo(
            Elb::class,
            ['lic_elb_cod'],
            ['elb_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lic_usr_login'],
            ['usr_login'],
        );
    }
}
