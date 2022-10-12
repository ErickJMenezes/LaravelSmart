<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pde extends OracleEloquent
{
    use Compoships;

    protected $table = 'pde';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pde_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nan(): BelongsTo
    {
        return $this->belongsTo(
            Nan::class,
            ['pde_nan_cod'],
            ['nan_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pde_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pde_usr_login_reg', 'pde_usr_login_alter'],
            ['usr_login', 'usr_login'],
        );
    }
}
