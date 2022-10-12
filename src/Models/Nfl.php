<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nfl extends OracleEloquent
{
    use Compoships;

    protected $table = 'nfl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nfl_serie', 'nfl_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['nfl_canc_mot_cod', 'nfl_canc_mot_cod', 'nfl_canc_mot_tipo', 'nfl_canc_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function atv(): BelongsTo
    {
        return $this->belongsTo(
            Atv::class,
            ['nfl_atv_cod'],
            ['atv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['nfl_usr_login_canc'],
            ['usr_login'],
        );
    }
}
