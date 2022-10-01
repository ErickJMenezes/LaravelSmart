<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExmCampolg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['exmlg_c_exm_c_exm_cod', 'exmlg_c_exg_cod', 'exmlg_c_exm_c_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exg(): BelongsTo
    {
        return $this->belongsTo(
            Exg::class,
            ['exmlg_c_exg_cod'],
            ['exg_cod'],
        );
    }

    public function exmCampo(): BelongsTo
    {
        return $this->belongsTo(
            ExmCampo::class,
            ['exmlg_c_exm_c_num', 'exmlg_c_exm_c_num', 'exmlg_c_exm_c_exm_cod', 'exmlg_c_exm_c_exm_cod'],
            ['exm_c_num', 'exm_c_exm_cod', 'exm_c_num', 'exm_c_exm_cod'],
        );
    }
}
