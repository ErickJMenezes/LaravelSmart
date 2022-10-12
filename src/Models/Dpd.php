<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dpd extends OracleEloquent
{
    use Compoships;

    protected $table = 'dpd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dpd_pac_reg', 'dpd_pdg_num', 'dpd_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['dpd_cid_cod', 'dpd_cid_cod', 'dpd_cid_tip', 'dpd_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function pat(): BelongsTo
    {
        return $this->belongsTo(
            Pat::class,
            ['dpd_pat_cod'],
            ['pat_cod'],
        );
    }

    public function pdg(): BelongsTo
    {
        return $this->belongsTo(
            Pdg::class,
            ['dpd_pdg_num', 'dpd_pdg_num', 'dpd_pac_reg', 'dpd_pac_reg'],
            ['pdg_num', 'pdg_pac', 'pdg_num', 'pdg_pac'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dpd_psv_ini', 'dpd_psv_fim'],
            ['psv_cod', 'psv_cod'],
        );
    }
}
