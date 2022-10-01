<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DloNfe extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dlo_n_nfe_serie', 'dlo_n_nfe_fne_cod', 'dlo_n_nfe_tipo', 'dlo_n_nfe_num', 'dlo_n_dlo_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dlo(): BelongsTo
    {
        return $this->belongsTo(
            Dlo::class,
            ['dlo_n_dlo_id'],
            ['dlo_id'],
        );
    }

    public function nfe(): BelongsTo
    {
        return $this->belongsTo(
            Nfe::class,
            ['dlo_n_nfe_num', 'dlo_n_nfe_num', 'dlo_n_nfe_num', 'dlo_n_nfe_num', 'dlo_n_nfe_serie', 'dlo_n_nfe_serie', 'dlo_n_nfe_serie', 'dlo_n_nfe_serie', 'dlo_n_nfe_tipo', 'dlo_n_nfe_tipo', 'dlo_n_nfe_tipo', 'dlo_n_nfe_tipo', 'dlo_n_nfe_fne_cod', 'dlo_n_nfe_fne_cod', 'dlo_n_nfe_fne_cod', 'dlo_n_nfe_fne_cod'],
            ['nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num'],
        );
    }
}
