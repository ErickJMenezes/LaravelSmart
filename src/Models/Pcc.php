<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pcc extends OracleEloquent
{
    use Compoships;

    protected $table = 'pcc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pcc_cnv_cod', 'pcc_psv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['pcc_cct_cod_cre', 'pcc_cct_cod_deb'],
            ['cct_cod', 'cct_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['pcc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['pcc_psv_cod'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pcc_usr_login'],
            ['usr_login'],
        );
    }
}
