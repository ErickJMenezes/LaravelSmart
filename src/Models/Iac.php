<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Iac extends OracleEloquent
{
    use Compoships;

    protected $table = 'iac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['iac_dthr_reg', 'iac_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['iac_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function pln(): BelongsTo
    {
        return $this->belongsTo(
            Pln::class,
            ['iac_pln_cod', 'iac_pln_cod', 'iac_cnv_cod', 'iac_cnv_cod'],
            ['pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['iac_usr_login'],
            ['usr_login'],
        );
    }
}
