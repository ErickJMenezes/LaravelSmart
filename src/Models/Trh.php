<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Trh extends OracleEloquent
{
    use Compoships;

    protected $table = 'trh';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['trh_dthr', 'trh_rep_serie', 'trh_rep_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function rhn(): BelongsTo
    {
        return $this->belongsTo(
            Rhn::class,
            ['trh_ccr_origem', 'trh_ccr_origem', 'trh_ccr_origem', 'trh_ccr_origem', 'trh_tipo_origem', 'trh_tipo_origem', 'trh_tipo_origem', 'trh_tipo_origem', 'trh_rep_num', 'trh_rep_num', 'trh_rep_num', 'trh_rep_num', 'trh_rep_serie', 'trh_rep_serie', 'trh_rep_serie', 'trh_rep_serie', 'trh_rep_num_dest', 'trh_rep_num_dest', 'trh_rep_num_dest', 'trh_rep_num_dest', 'trh_rep_serie_dest', 'trh_rep_serie_dest', 'trh_rep_serie_dest', 'trh_rep_serie_dest', 'trh_ccr_destino', 'trh_ccr_destino', 'trh_ccr_destino', 'trh_ccr_destino', 'trh_tipo_destino', 'trh_tipo_destino', 'trh_tipo_destino', 'trh_tipo_destino'],
            ['rhn_ccr_cod', 'rhn_tipo', 'rhn_rep_num', 'rhn_rep_serie', 'rhn_ccr_cod', 'rhn_tipo', 'rhn_rep_num', 'rhn_rep_serie', 'rhn_ccr_cod', 'rhn_tipo', 'rhn_rep_num', 'rhn_rep_serie', 'rhn_ccr_cod', 'rhn_tipo', 'rhn_rep_num', 'rhn_rep_serie', 'rhn_ccr_cod', 'rhn_tipo', 'rhn_rep_num', 'rhn_rep_serie', 'rhn_ccr_cod', 'rhn_tipo', 'rhn_rep_num', 'rhn_rep_serie', 'rhn_ccr_cod', 'rhn_tipo', 'rhn_rep_num', 'rhn_rep_serie', 'rhn_ccr_cod', 'rhn_tipo', 'rhn_rep_num', 'rhn_rep_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['trh_usr_login'],
            ['usr_login'],
        );
    }
}
