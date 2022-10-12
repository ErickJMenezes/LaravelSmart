<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Ach extends OracleEloquent
{
    use Compoships;

    protected $table = 'ach';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ach_pac_reg', 'ach_dthr', 'ach_hsp_num', 'ach_cth_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['ach_edl_cod'],
            ['edl_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['ach_pac_reg'],
            ['pac_reg'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ach_smk_cod', 'ach_smk_cod', 'ach_smk_tipo', 'ach_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ach_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ach_usr_login', 'ach_usr_login_status', 'ach_usr_login_destino'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }
}
