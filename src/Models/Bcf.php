<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bcf extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcf_ccr_cod', 'bcf_bcp_serie', 'bcf_bcp_num', 'bcf_cheque'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bcp(): BelongsTo
    {
        return $this->belongsTo(
            Bcp::class,
            ['bcf_bcp_num', 'bcf_bcp_num', 'bcf_bcp_serie', 'bcf_bcp_serie'],
            ['bcp_num', 'bcp_serie', 'bcp_num', 'bcp_serie'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['bcf_ccr_cod'],
            ['ccr_cod'],
        );
    }

    public function rdi(): BelongsTo
    {
        return $this->belongsTo(
            Rdi::class,
            ['bcf_rdi_seq', 'bcf_rdi_seq', 'bcf_rdi_seq', 'bcf_mte_seq', 'bcf_mte_seq', 'bcf_mte_seq', 'bcf_mte_serie', 'bcf_mte_serie', 'bcf_mte_serie'],
            ['rdi_seq', 'rdi_mte_seq', 'rdi_mte_serie', 'rdi_seq', 'rdi_mte_seq', 'rdi_mte_serie', 'rdi_seq', 'rdi_mte_seq', 'rdi_mte_serie'],
        );
    }

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['bcf_enc_nfs_numero', 'bcf_enc_nfs_numero', 'bcf_enc_nfs_numero', 'bcf_enc_nfs_serie', 'bcf_enc_nfs_serie', 'bcf_enc_nfs_serie', 'bcf_enc_nfs_tipo', 'bcf_enc_nfs_tipo', 'bcf_enc_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }
}
