<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SesabEnc extends OracleEloquent
{
    use Compoships;

    protected $table = 'sesab_enc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sesab_enc_dthr', 'sesab_enc_usr'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bai(): BelongsTo
    {
        return $this->belongsTo(
            Bai::class,
            ['sesab_enc_bai_cod_mora', 'sesab_enc_bai_cod_mora', 'sesab_enc_cde_cod_mora', 'sesab_enc_cde_cod_mora', 'sesab_enc_bai_cod_esta', 'sesab_enc_bai_cod_esta', 'sesab_enc_cde_cod_esta', 'sesab_enc_cde_cod_esta'],
            ['bai_cde_cod', 'bai_cod', 'bai_cde_cod', 'bai_cod', 'bai_cde_cod', 'bai_cod', 'bai_cde_cod', 'bai_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['sesab_enc_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['sesab_enc_usr'],
            ['usr_login'],
        );
    }
}
