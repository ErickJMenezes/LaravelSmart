<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pdf extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pdf_pde_num', 'pdf_nan_cod', 'pdf_nan_f_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nanF(): BelongsTo
    {
        return $this->belongsTo(
            NanF::class,
            ['pdf_nan_f_seq', 'pdf_nan_f_seq', 'pdf_nan_cod', 'pdf_nan_cod'],
            ['nan_f_seq', 'nan_f_nan_cod', 'nan_f_seq', 'nan_f_nan_cod'],
        );
    }

    public function pde(): BelongsTo
    {
        return $this->belongsTo(
            Pde::class,
            ['pdf_pde_num'],
            ['pde_num'],
        );
    }
}
