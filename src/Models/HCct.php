<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HCct extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_cct';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_cct_pac_reg', 'h_cct_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_cct_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_cct_alter_usr_login', 'h_cct_reg_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['h_cct_cult_bac_dsc_cod'],
            ['dsc_cod'],
        );
    }
}
