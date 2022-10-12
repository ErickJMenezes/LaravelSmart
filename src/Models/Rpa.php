<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rpa extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rpa_pgt_cod', 'rpa_apq_cod', 'rpa_qst_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function apq(): BelongsTo
    {
        return $this->belongsTo(
            Apq::class,
            ['rpa_apq_cod', 'rpa_apq_cod', 'rpa_qst_cod', 'rpa_qst_cod'],
            ['apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod'],
        );
    }

    public function pgt(): BelongsTo
    {
        return $this->belongsTo(
            Pgt::class,
            ['rpa_pgt_cod', 'rpa_pgt_cod', 'rpa_qst_cod', 'rpa_qst_cod'],
            ['pgt_cod', 'pgt_qst_cod', 'pgt_cod', 'pgt_qst_cod'],
        );
    }
}
