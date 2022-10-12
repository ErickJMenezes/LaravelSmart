<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SesabRec extends OracleEloquent
{
    use Compoships;

    protected $table = 'sesab_rec';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sesab_rec_num', 'sesab_rec_pac_reg', 'sesab_rec_dthr'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sesabReg(): BelongsTo
    {
        return $this->belongsTo(
            SesabReg::class,
            ['sesab_rec_dthr', 'sesab_rec_dthr', 'sesab_rec_pac_reg', 'sesab_rec_pac_reg'],
            ['sesab_reg_dthr', 'sesab_reg_pac_reg', 'sesab_reg_dthr', 'sesab_reg_pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['sesab_rec_str_cod_unid'],
            ['str_cod'],
        );
    }
}
