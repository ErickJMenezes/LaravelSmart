<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ipe extends OracleEloquent
{
    use Compoships;

    protected $table = 'ipe';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ipe_sba_cod', 'ipe_pet_serie', 'ipe_mat_cod', 'ipe_pet_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function lma(): BelongsTo
    {
        return $this->belongsTo(
            Lma::class,
            ['ipe_lma_cod', 'ipe_lma_cod', 'ipe_gmm_cod', 'ipe_gmm_cod'],
            ['lma_cod', 'lma_gmm_cod', 'lma_cod', 'lma_gmm_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['ipe_mat_cod'],
            ['mat_cod'],
        );
    }

    public function pet(): BelongsTo
    {
        return $this->belongsTo(
            Pet::class,
            ['ipe_pet_num', 'ipe_pet_num', 'ipe_pet_serie', 'ipe_pet_serie'],
            ['pet_num', 'pet_serie', 'pet_num', 'pet_serie'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['ipe_sba_cod'],
            ['sba_cod'],
        );
    }
}
