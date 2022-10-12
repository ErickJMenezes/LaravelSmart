<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pmc extends OracleEloquent
{
    use Compoships;

    protected $table = 'pmc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pmc_num', 'pmc_cap_num', 'pmc_pac_reg', 'pmc_fcp_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['pmc_bul_med'],
            ['bul_med'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['pmc_bvi_cod'],
            ['bvi_cod'],
        );
    }

    public function fcp(): BelongsTo
    {
        return $this->belongsTo(
            Fcp::class,
            ['pmc_fcp_num', 'pmc_fcp_num', 'pmc_fcp_num', 'pmc_cap_num', 'pmc_cap_num', 'pmc_cap_num', 'pmc_pac_reg', 'pmc_pac_reg', 'pmc_pac_reg'],
            ['fcp_num', 'fcp_cap_num', 'fcp_pac_reg', 'fcp_num', 'fcp_cap_num', 'fcp_pac_reg', 'fcp_num', 'fcp_cap_num', 'fcp_pac_reg'],
        );
    }

    public function pgt(): BelongsTo
    {
        return $this->belongsTo(
            Pgt::class,
            ['pmc_pgt_cod', 'pmc_pgt_cod', 'pmc_qst_cod', 'pmc_qst_cod'],
            ['pgt_cod', 'pgt_qst_cod', 'pgt_cod', 'pgt_qst_cod'],
        );
    }
}
