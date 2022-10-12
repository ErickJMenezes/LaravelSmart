<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dtb extends OracleEloquent
{
    use Compoships;

    protected $table = 'dtb';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dtb_ctf_tipo', 'dtb_ctf_cod', 'dtb_id', 'dtb_cnv_cod', 'dtb_limite_min'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dtb_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['dtb_ctf_cod', 'dtb_ctf_cod', 'dtb_ctf_tipo', 'dtb_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['dtb_smk_cod', 'dtb_smk_cod', 'dtb_smk_tipo', 'dtb_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
