<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Wav extends OracleEloquent
{
    use Compoships;

    protected $table = 'wav';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['wav_dthr', 'wav_smk_tipo', 'wav_smk_cod', 'wav_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['wav_pac_reg'],
            ['pac_reg'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['wav_smk_cod', 'wav_smk_cod', 'wav_smk_tipo', 'wav_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['wav_usr_login'],
            ['usr_login'],
        );
    }
}
