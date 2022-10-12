<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class OrpagBradescoMq extends OracleEloquent
{
    use Compoships;

    protected $table = 'orpag_bradesco_mq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['orpag_bm_tiss_guia', 'orpag_bm_str_solic', 'orpag_bm_ctf_cod', 'orpag_bm_cnv_cod', 'orpag_bm_ctf_tipo', 'orpag_bm_smk_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
