<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CapPrx extends OracleEloquent
{
    use Compoships;

    protected $table = 'cap_prx';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cap_p_num', 'cap_p_pac_reg', 'cap_p_prx_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['cap_p_eqp_num'],
            ['eqp_num'],
        );
    }

    public function cap(): BelongsTo
    {
        return $this->belongsTo(
            Cap::class,
            ['cap_p_num', 'cap_p_num', 'cap_p_pac_reg', 'cap_p_pac_reg'],
            ['cap_num', 'cap_pac_reg', 'cap_num', 'cap_pac_reg'],
        );
    }

    public function prx(): BelongsTo
    {
        return $this->belongsTo(
            Prx::class,
            ['cap_p_prx_cod'],
            ['prx_cod'],
        );
    }
}
