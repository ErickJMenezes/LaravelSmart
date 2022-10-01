<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EctEsocPca extends OracleEloquent
{
    use Compoships;

    protected $table = 'ect_esoc_pca';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ect_esoc_pca_ect_pac_reg', 'ect_esoc_pca_ect_numero', 'ect_esoc_pca_esoc_pca_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function esocPca(): BelongsTo
    {
        return $this->belongsTo(
            EsocPca::class,
            ['ect_esoc_pca_esoc_pca_cod'],
            ['esoc_pca_cod'],
        );
    }
}
