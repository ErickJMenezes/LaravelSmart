<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Est extends OracleEloquent
{
    use Compoships;

    protected $table = 'est';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['est_smk_cod', 'est_mes', 'est_smk_tipo', 'est_ctf_cod', 'est_cnv_cod', 'est_ano'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['est_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['est_ctf_cod', 'est_ctf_cod', 'est_smk_tipo', 'est_smk_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['est_smk_cod', 'est_smk_cod', 'est_smk_tipo', 'est_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
