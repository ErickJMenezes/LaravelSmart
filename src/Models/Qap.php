<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qap extends OracleEloquent
{
    use Compoships;

    protected $table = 'qap';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qap_elb_cod', 'qap_pgt_cod', 'qap_qst_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function elb(): BelongsTo
    {
        return $this->belongsTo(
            Elb::class,
            ['qap_elb_cod'],
            ['elb_cod'],
        );
    }

    public function pgt(): BelongsTo
    {
        return $this->belongsTo(
            Pgt::class,
            ['qap_pgt_cod', 'qap_pgt_cod', 'qap_qst_cod', 'qap_qst_cod'],
            ['pgt_cod', 'pgt_qst_cod', 'pgt_cod', 'pgt_qst_cod'],
        );
    }
}
