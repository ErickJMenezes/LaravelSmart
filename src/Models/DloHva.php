<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DloHva extends OracleEloquent
{
    use Compoships;

    protected $table = 'dlo_hva';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dlo_h_hva_pac_reg', 'dlo_h_dlo_id', 'dlo_h_hav_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hva(): BelongsTo
    {
        return $this->belongsTo(
            Hva::class,
            ['dlo_h_hva_pac_reg', 'dlo_h_hva_pac_reg', 'dlo_h_hav_num', 'dlo_h_hav_num'],
            ['hva_pac_reg', 'hva_num', 'hva_pac_reg', 'hva_num'],
        );
    }

    public function dlo(): BelongsTo
    {
        return $this->belongsTo(
            Dlo::class,
            ['dlo_h_dlo_id'],
            ['dlo_id'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['dlo_h_hva_pac_reg'],
            ['pac_reg'],
        );
    }
}
