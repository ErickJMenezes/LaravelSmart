<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lmg extends OracleEloquent
{
    use Compoships;

    protected $table = 'lmg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lmg_pac_reg', 'lmg_exame'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function rcl(): BelongsTo
    {
        return $this->belongsTo(
            Rcl::class,
            ['lmg_rcl_dthr', 'lmg_rcl_dthr', 'lmg_rcl_dthr', 'lmg_rcl_dthr', 'lmg_rcl_cod', 'lmg_rcl_cod', 'lmg_rcl_cod', 'lmg_rcl_cod', 'lmg_rcl_tpcod', 'lmg_rcl_tpcod', 'lmg_rcl_tpcod', 'lmg_rcl_tpcod', 'lmg_pac_reg', 'lmg_pac_reg', 'lmg_pac_reg', 'lmg_pac_reg'],
            ['rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac', 'rcl_dthr', 'rcl_cod', 'rcl_tpcod', 'rcl_pac'],
        );
    }

    public function col(): BelongsTo
    {
        return $this->belongsTo(
            Col::class,
            ['lmg_col_cod'],
            ['col_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['lmg_pac_reg'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['lmg_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lmg_usr_login'],
            ['usr_login'],
        );
    }
}
