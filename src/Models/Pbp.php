<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pbp extends OracleEloquent
{
    use Compoships;

    protected $table = 'pbp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pbp_seq'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function grEqp(): BelongsTo
    {
        return $this->belongsTo(
            GrEqp::class,
            ['pbp_gr_eqp_nome'],
            ['gr_eqp_nome'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pbp_usr_login'],
            ['usr_login'],
        );
    }
}
