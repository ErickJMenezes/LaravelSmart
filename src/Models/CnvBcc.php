<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnvBcc extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnv_bcc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnv_b_cnv_cod', 'cnv_b_cre_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cnv_b_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function cre(): BelongsTo
    {
        return $this->belongsTo(
            Cre::class,
            ['cnv_b_cre_cod'],
            ['cre_cod'],
        );
    }
}
