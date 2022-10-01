<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SesabReg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sesab_reg_pac_reg', 'sesab_reg_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['sesab_reg_pac_reg'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['sesab_reg_str_unid_pn', 'sesab_reg_str_unid_ref', 'sesab_reg_str_unid_int', 'sesab_reg_str_unid_transf'],
            ['str_cod', 'str_cod', 'str_cod', 'str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['sesab_reg_usr_login', 'sesab_reg_usr_login_med'],
            ['usr_login', 'usr_login'],
        );
    }
}
