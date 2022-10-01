<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CrSnf extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cr_snf_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function crCor(): BelongsTo
    {
        return $this->belongsTo(
            CrCor::class,
            ['cr_snf_cor_cod'],
            ['cr_cor_cod'],
        );
    }

    public function crSnv(): BelongsTo
    {
        return $this->belongsTo(
            CrSnv::class,
            ['cr_snf_snv_id'],
            ['cr_snv_id'],
        );
    }
}
