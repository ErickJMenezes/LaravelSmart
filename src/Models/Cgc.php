<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cgc extends OracleEloquent
{
    use Compoships;

    protected $table = 'cgc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cgc_cnv_cod', 'cgc_smk_cod', 'cgc_smk_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cgc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cgc_smk_cod', 'cgc_smk_cod', 'cgc_smk_tipo', 'cgc_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
