<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExmCampoMap extends OracleEloquent
{
    use Compoships;

    protected $table = 'exm_campo_map';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exm_m_exm_cod', 'exm_m_emp_cod', 'exm_m_cod_externo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['exm_m_emp_cod'],
            ['emp_cod'],
        );
    }

    public function exmCampo(): BelongsTo
    {
        return $this->belongsTo(
            ExmCampo::class,
            ['exm_m_num', 'exm_m_num', 'exm_m_exm_cod', 'exm_m_exm_cod'],
            ['exm_c_num', 'exm_c_exm_cod', 'exm_c_num', 'exm_c_exm_cod'],
        );
    }
}
