<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Apt extends OracleEloquent
{
    use Compoships;

    protected $table = 'apt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['apt_tp_tab', 'apt_tab_cod', 'apt_cnv_cod', 'apt_dthr_vcto'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['apt_tab_cod'],
            ['tab_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['apt_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function pln(): BelongsTo
    {
        return $this->belongsTo(
            Pln::class,
            ['apt_pln_cod', 'apt_pln_cod', 'apt_cnv_cod', 'apt_cnv_cod'],
            ['pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod'],
        );
    }
}
