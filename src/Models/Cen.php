<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cen extends OracleEloquent
{
    use Compoships;

    protected $table = 'cen';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cen_id', 'cen_nfe_tipo', 'cen_fne_cod', 'cen_nfe_num', 'cen_nfe_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['cen_mat_cod'],
            ['mat_cod'],
        );
    }

    public function nfe(): BelongsTo
    {
        return $this->belongsTo(
            Nfe::class,
            ['cen_nfe_num', 'cen_nfe_num', 'cen_nfe_num', 'cen_nfe_num', 'cen_nfe_serie', 'cen_nfe_serie', 'cen_nfe_serie', 'cen_nfe_serie', 'cen_nfe_tipo', 'cen_nfe_tipo', 'cen_nfe_tipo', 'cen_nfe_tipo', 'cen_fne_cod', 'cen_fne_cod', 'cen_fne_cod', 'cen_fne_cod'],
            ['nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num'],
        );
    }
}
