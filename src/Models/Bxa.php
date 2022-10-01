<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bxa extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['bxa_num', 'bxa_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['bxa_ccr_banco'],
            ['ccr_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['bxa_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['bxa_emp_cod'],
            ['emp_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['bxa_usr_login'],
            ['usr_login'],
        );
    }
}
