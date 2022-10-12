<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cfp extends OracleEloquent
{
    use Compoships;

    protected $table = 'cfp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cfp_dthr', 'cfp_pront', 'cfp_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['cfp_loc_cod_arq'],
            ['loc_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['cfp_pac_reg'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cfp_str_unid', 'cfp_str_solic'],
            ['str_cod', 'str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cfp_usr_login', 'cfp_usr_login_sol'],
            ['usr_login', 'usr_login'],
        );
    }
}
