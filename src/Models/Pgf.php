<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pgf extends OracleEloquent
{
    use Compoships;

    protected $table = 'pgf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pgf_lta_cod', 'pgf_gfc_num', 'pgf_pro_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function gfc(): BelongsTo
    {
        return $this->belongsTo(
            Gfc::class,
            ['pgf_gfc_num', 'pgf_gfc_num', 'pgf_lta_cod', 'pgf_lta_cod'],
            ['gfc_num', 'gfc_lta_cod', 'gfc_num', 'gfc_lta_cod'],
        );
    }

    public function pro(): BelongsTo
    {
        return $this->belongsTo(
            Pro::class,
            ['pgf_pro_cod'],
            ['pro_cod'],
        );
    }
}
