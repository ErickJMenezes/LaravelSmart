<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Raf extends OracleEloquent
{
    use Compoships;

    protected $table = 'raf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['raf_cop_num', 'raf_dthr', 'raf_icp_seq', 'raf_fic_id', 'raf_fne_cod', 'raf_cop_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mra(): BelongsTo
    {
        return $this->belongsTo(
            Mra::class,
            ['raf_mra_cod'],
            ['mra_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['raf_usr_login'],
            ['usr_login'],
        );
    }

    public function fic(): BelongsTo
    {
        return $this->belongsTo(
            Fic::class,
            ['raf_fic_id', 'raf_fic_id', 'raf_fic_id', 'raf_fic_id', 'raf_fic_id', 'raf_icp_seq', 'raf_icp_seq', 'raf_icp_seq', 'raf_icp_seq', 'raf_icp_seq', 'raf_fne_cod', 'raf_fne_cod', 'raf_fne_cod', 'raf_fne_cod', 'raf_fne_cod', 'raf_cop_num', 'raf_cop_num', 'raf_cop_num', 'raf_cop_num', 'raf_cop_num', 'raf_cop_serie', 'raf_cop_serie', 'raf_cop_serie', 'raf_cop_serie', 'raf_cop_serie'],
            ['fic_id', 'fic_icp_seq', 'fic_fne_cod', 'fic_cop_num', 'fic_cop_serie', 'fic_id', 'fic_icp_seq', 'fic_fne_cod', 'fic_cop_num', 'fic_cop_serie', 'fic_id', 'fic_icp_seq', 'fic_fne_cod', 'fic_cop_num', 'fic_cop_serie', 'fic_id', 'fic_icp_seq', 'fic_fne_cod', 'fic_cop_num', 'fic_cop_serie', 'fic_id', 'fic_icp_seq', 'fic_fne_cod', 'fic_cop_num', 'fic_cop_serie'],
        );
    }
}
