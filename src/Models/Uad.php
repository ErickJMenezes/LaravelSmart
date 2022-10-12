<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Uad extends OracleEloquent
{
    use Compoships;

    protected $table = 'uad';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['uad_cpg_num_pg', 'uad_cpg_num_ad', 'uad_ipg_parc_pg', 'uad_cpg_serie_ad', 'uad_cpg_serie_pg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['uad_cpg_num_pg', 'uad_cpg_num_pg', 'uad_cpg_serie_pg', 'uad_cpg_serie_pg', 'uad_cpg_num_ad', 'uad_cpg_num_ad', 'uad_cpg_serie_ad', 'uad_cpg_serie_ad'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }
}
