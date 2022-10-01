<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ECcl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['e_ccl_num', 'e_ccl_pac_reg', 'e_ccl_hsp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['e_ccl_hsp_num', 'e_ccl_hsp_num', 'e_ccl_pac_reg', 'e_ccl_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }
}