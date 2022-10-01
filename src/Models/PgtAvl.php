<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PgtAvl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pgt_a_qst_cod', 'pgt_a_minimo', 'pgt_a_pgt_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pgt(): BelongsTo
    {
        return $this->belongsTo(
            Pgt::class,
            ['pgt_a_pgt_cod', 'pgt_a_pgt_cod', 'pgt_a_qst_cod', 'pgt_a_qst_cod'],
            ['pgt_cod', 'pgt_qst_cod', 'pgt_cod', 'pgt_qst_cod'],
        );
    }
}