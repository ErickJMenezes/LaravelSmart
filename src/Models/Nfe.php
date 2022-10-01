<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nfe extends OracleEloquent
{
    use Compoships;

    protected $table = 'nfe';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nfe_num', 'nfe_serie', 'nfe_tipo', 'nfe_fne_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['nfe_fne_cod', 'nfe_transp_fne_cod'],
            ['fne_cod', 'fne_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['nfe_desp_ac_emp_cod'],
            ['emp_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['nfe_sba_cod'],
            ['sba_cod'],
        );
    }
}
