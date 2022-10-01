<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tre extends OracleEloquent
{
    use Compoships;

    protected $table = 'tre';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tre_eqp_num', 'tre_dthr_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['tre_eqp_num'],
            ['eqp_num'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['tre_mot_cod', 'tre_mot_cod', 'tre_mot_tipo', 'tre_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['tre_pac_reg_destino'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['tre_str_destino'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['tre_usr_login_reg', 'tre_usr_login_receb'],
            ['usr_login', 'usr_login'],
        );
    }
}
