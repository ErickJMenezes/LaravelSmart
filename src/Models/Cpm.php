<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cpm extends OracleEloquent
{
    use Compoships;

    protected $table = 'cpm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cpm_cop_serie', 'cpm_fne_cod', 'cpm_dthr', 'cpm_cop_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['cpm_fne_cod'],
            ['fne_cod'],
        );
    }

    public function cop(): BelongsTo
    {
        return $this->belongsTo(
            Cop::class,
            ['cpm_cop_num', 'cpm_cop_num', 'cpm_cop_serie', 'cpm_cop_serie'],
            ['cop_num', 'cop_serie', 'cop_num', 'cop_serie'],
        );
    }
}
