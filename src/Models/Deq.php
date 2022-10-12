<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Deq extends OracleEloquent
{
    use Compoships;

    protected $table = 'deq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['deq_dthr', 'deq_eqp_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ede(): BelongsTo
    {
        return $this->belongsTo(
            Ede::class,
            ['deq_ede_cod'],
            ['ede_cod'],
        );
    }

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['deq_eqp_num'],
            ['eqp_num'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['deq_usr_login'],
            ['usr_login'],
        );
    }
}
