<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AtivDoenCap extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['adc_num', 'adc_cnv_cod', 'adc_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cap(): BelongsTo
    {
        return $this->belongsTo(
            Cap::class,
            ['adc_num', 'adc_num', 'adc_pac_reg', 'adc_pac_reg'],
            ['cap_num', 'cap_pac_reg', 'cap_num', 'cap_pac_reg'],
        );
    }
}
