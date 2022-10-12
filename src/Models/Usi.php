<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Usi extends OracleEloquent
{
    use Compoships;

    protected $table = 'usi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['usi_login'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['usi_ctf_cod', 'usi_ctf_cod', 'usi_ctf_tipo', 'usi_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['usi_usr_login'],
            ['usr_login'],
        );
    }

    public function gru(): BelongsTo
    {
        return $this->belongsTo(
            Gru::class,
            ['usi_gru_cod'],
            ['gru_cod'],
        );
    }
}
