<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ecv extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ecv_smk_tipo', 'ecv_cvc_serie', 'ecv_cvc_num', 'ecv_smk_cod', 'ecv_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['ecv_emp_cod_terc'],
            ['emp_cod'],
        );
    }

    public function icv(): BelongsTo
    {
        return $this->belongsTo(
            Icv::class,
            ['ecv_pac_reg', 'ecv_pac_reg', 'ecv_pac_reg', 'ecv_cvc_num', 'ecv_cvc_num', 'ecv_cvc_num', 'ecv_cvc_serie', 'ecv_cvc_serie', 'ecv_cvc_serie'],
            ['icv_pac_reg', 'icv_cvc_num', 'icv_cvc_serie', 'icv_pac_reg', 'icv_cvc_num', 'icv_cvc_serie', 'icv_pac_reg', 'icv_cvc_num', 'icv_cvc_serie'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ecv_smk_cod', 'ecv_smk_cod', 'ecv_smk_tipo', 'ecv_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
