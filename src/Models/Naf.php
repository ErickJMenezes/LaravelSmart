<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Naf extends OracleEloquent
{
    use Compoships;

    protected $table = 'naf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['naf_nfe_num', 'naf_fne_cod', 'naf_nfe_serie', 'naf_cop_num', 'naf_nfe_tipo', 'naf_cop_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nfe(): BelongsTo
    {
        return $this->belongsTo(
            Nfe::class,
            ['naf_fne_cod', 'naf_fne_cod', 'naf_fne_cod', 'naf_fne_cod', 'naf_nfe_num', 'naf_nfe_num', 'naf_nfe_num', 'naf_nfe_num', 'naf_nfe_serie', 'naf_nfe_serie', 'naf_nfe_serie', 'naf_nfe_serie', 'naf_nfe_tipo', 'naf_nfe_tipo', 'naf_nfe_tipo', 'naf_nfe_tipo'],
            ['nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num'],
        );
    }

    public function cop(): BelongsTo
    {
        return $this->belongsTo(
            Cop::class,
            ['naf_cop_num', 'naf_cop_num', 'naf_cop_serie', 'naf_cop_serie'],
            ['cop_num', 'cop_serie', 'cop_num', 'cop_serie'],
        );
    }
}
