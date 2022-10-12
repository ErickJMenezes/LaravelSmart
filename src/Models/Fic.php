<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fic extends OracleEloquent
{
    use Compoships;

    protected $table = 'fic';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fic_icp_seq', 'fic_cop_serie', 'fic_cop_num', 'fic_id', 'fic_fne_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['fic_mat_cpg_num', 'fic_mat_cpg_num', 'fic_mat_cpg_serie', 'fic_mat_cpg_serie'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['fic_fne_cod', 'fic_rev_fne_transp'],
            ['fne_cod', 'fne_cod'],
        );
    }

    public function aft(): BelongsTo
    {
        return $this->belongsTo(
            Aft::class,
            ['fic_aft_num', 'fic_aft_num', 'fic_aft_serie', 'fic_aft_serie'],
            ['aft_num', 'aft_serie', 'aft_num', 'aft_serie'],
        );
    }

    public function cop(): BelongsTo
    {
        return $this->belongsTo(
            Cop::class,
            ['fic_cop_num', 'fic_cop_num', 'fic_cop_serie', 'fic_cop_serie'],
            ['cop_num', 'cop_serie', 'cop_num', 'cop_serie'],
        );
    }

    public function icp(): BelongsTo
    {
        return $this->belongsTo(
            Icp::class,
            ['fic_icp_seq', 'fic_icp_seq', 'fic_icp_seq', 'fic_cop_num', 'fic_cop_num', 'fic_cop_num', 'fic_cop_serie', 'fic_cop_serie', 'fic_cop_serie'],
            ['icp_seq', 'icp_cop_num', 'icp_cop_serie', 'icp_seq', 'icp_cop_num', 'icp_cop_serie', 'icp_seq', 'icp_cop_num', 'icp_cop_serie'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['fic_mat_cod'],
            ['mat_cod'],
        );
    }
}
