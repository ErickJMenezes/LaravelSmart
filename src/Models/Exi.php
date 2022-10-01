<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exi extends OracleEloquent
{
    use Compoships;

    protected $table = 'exi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exi_seq', 'exi_exp_seq', 'exi_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exp(): BelongsTo
    {
        return $this->belongsTo(
            Exp::class,
            ['exi_exp_seq', 'exi_exp_seq', 'exi_cnv_cod', 'exi_cnv_cod'],
            ['exp_seq', 'exp_cnv_cod', 'exp_seq', 'exp_cnv_cod'],
        );
    }
}
