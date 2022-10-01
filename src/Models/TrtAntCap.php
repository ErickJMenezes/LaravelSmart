<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TrtAntCap extends OracleEloquent
{
    use Compoships;

    protected $table = 'trt_ant_cap';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['trt_ant_cap_num', 'trt_ant_cap_dthr_ini', 'trt_ant_cap_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cap(): BelongsTo
    {
        return $this->belongsTo(
            Cap::class,
            ['trt_ant_cap_num', 'trt_ant_cap_num', 'trt_ant_cap_pac_reg', 'trt_ant_cap_pac_reg'],
            ['cap_num', 'cap_pac_reg', 'cap_num', 'cap_pac_reg'],
        );
    }
}
