<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lhm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lhm_pac_reg', 'lhm_exame'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function col(): BelongsTo
    {
        return $this->belongsTo(
            Col::class,
            ['lhm_col_cod'],
            ['col_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['lhm_pac_reg'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['lhm_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lhm_usr_login'],
            ['usr_login'],
        );
    }
}
