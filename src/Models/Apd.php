<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Apd extends OracleEloquent
{
    use Compoships;

    protected $table = 'apd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['apd_pdg_pac2', 'apd_pdg_num2', 'apd_pdg_pac', 'apd_pdg_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pdg(): BelongsTo
    {
        return $this->belongsTo(
            Pdg::class,
            ['apd_pdg_num', 'apd_pdg_num', 'apd_pdg_pac', 'apd_pdg_pac', 'apd_pdg_num2', 'apd_pdg_num2', 'apd_pdg_pac2', 'apd_pdg_pac2'],
            ['pdg_num', 'pdg_pac', 'pdg_num', 'pdg_pac', 'pdg_num', 'pdg_pac', 'pdg_num', 'pdg_pac'],
        );
    }
}
