<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LabQst extends OracleEloquent
{
    use Compoships;

    protected $table = 'lab_qst';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lab_qst_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pgt(): BelongsTo
    {
        return $this->belongsTo(
            Pgt::class,
            ['lab_qst_pgt_cod_solic', 'lab_qst_pgt_cod_solic', 'lab_qst_qst_cod_solic', 'lab_qst_qst_cod_solic'],
            ['pgt_cod', 'pgt_qst_cod', 'pgt_cod', 'pgt_qst_cod'],
        );
    }

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['lab_qst_qst_cod_solic'],
            ['qst_cod'],
        );
    }
}
