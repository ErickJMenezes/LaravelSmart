<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hva extends OracleEloquent
{
    use Compoships;

    protected $table = 'hva';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hva_pac_reg', 'hva_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['hva_pac_reg'],
            ['pac_reg'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['hva_smk_cod', 'hva_smk_cod', 'hva_smk_tipo', 'hva_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
