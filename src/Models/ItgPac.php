<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ItgPac extends OracleEloquent
{
    use Compoships;

    protected $table = 'itg_pac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['itg_p_emp_cod_origem', 'itg_p_emp_cod_destino'],
            ['emp_cod', 'emp_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['itg_p_usr_login'],
            ['usr_login'],
        );
    }
}
