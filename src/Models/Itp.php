<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Itp extends OracleEloquent
{
    use Compoships;

    protected $table = 'itp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['itp_tpc_serie', 'itp_tpc_num', 'itp_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['itp_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['itp_smk_cod', 'itp_smk_cod', 'itp_smk_tipo', 'itp_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['itp_tab_cod'],
            ['tab_cod'],
        );
    }

    public function tpc(): BelongsTo
    {
        return $this->belongsTo(
            Tpc::class,
            ['itp_tpc_num', 'itp_tpc_num', 'itp_tpc_serie', 'itp_tpc_serie'],
            ['tpc_num', 'tpc_serie', 'tpc_num', 'tpc_serie'],
        );
    }
}
