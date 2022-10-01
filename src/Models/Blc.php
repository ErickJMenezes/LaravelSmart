<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Blc extends OracleEloquent
{
    use Compoships;

    protected $table = 'blc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['blc_dthr_ini', 'blc_loc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['blc_loc_cod'],
            ['loc_cod'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['blc_mot_cod', 'blc_mot_cod', 'blc_mot_tipo', 'blc_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['blc_usr_login'],
            ['usr_login'],
        );
    }
}
