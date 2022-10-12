<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lcm extends OracleEloquent
{
    use Compoships;

    protected $table = 'lcm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lcm_pac_reg', 'lcm_exame'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function col(): BelongsTo
    {
        return $this->belongsTo(
            Col::class,
            ['lcm_col_cod'],
            ['col_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['lcm_pac_reg'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['lcm_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lcm_usr_login'],
            ['usr_login'],
        );
    }
}
