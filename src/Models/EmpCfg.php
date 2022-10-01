<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmpCfg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['emp_cfg_dom_cfg_cod', 'emp_cfg_emp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function domCfg(): BelongsTo
    {
        return $this->belongsTo(
            DomCfg::class,
            ['emp_cfg_dom_cfg_cod'],
            ['dom_cfg_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['emp_cfg_emp_cod'],
            ['emp_cod'],
        );
    }
}
