<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Blq extends OracleEloquent
{
    use Compoships;

    protected $table = 'blq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['blq_dthr_ini', 'blq_psv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['blq_ctf_cod', 'blq_ctf_cod', 'blq_ctf_tipo', 'blq_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['blq_loc_cod'],
            ['loc_cod'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['blq_mot_cod', 'blq_mot_cod', 'blq_mot_tipo', 'blq_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['blq_psv_cod'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['blq_smk_cod', 'blq_smk_cod', 'blq_smk_tipo', 'blq_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['blq_str_unid', 'blq_str_cod'],
            ['str_cod', 'str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['blq_usr_login'],
            ['usr_login'],
        );
    }
}
