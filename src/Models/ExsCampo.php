<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExsCampo extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['exs_c_item_id', 'exs_c_pex_pac', 'exs_c_pex_dthr', 'exs_c_exm_cod', 'exs_c_exm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exsCampos(): HasMany
    {
        return $this->hasMany(
            ExsCampo::class,
            ['exs_c_item_id', 'exs_c_exm_num', 'exs_c_exm_cod', 'exs_c_pex_dthr', 'exs_c_pex_pac', 'exs_c_item_id', 'exs_c_exm_num', 'exs_c_exm_cod', 'exs_c_pex_dthr', 'exs_c_pex_pac', 'exs_c_item_id', 'exs_c_exm_num', 'exs_c_exm_cod', 'exs_c_pex_dthr', 'exs_c_pex_pac', 'exs_c_item_id', 'exs_c_exm_num', 'exs_c_exm_cod', 'exs_c_pex_dthr', 'exs_c_pex_pac', 'exs_c_item_id', 'exs_c_exm_num', 'exs_c_exm_cod', 'exs_c_pex_dthr', 'exs_c_pex_pac'],
            ['exs_c_item_id', 'exs_c_item_id', 'exs_c_item_id', 'exs_c_item_id', 'exs_c_item_id', 'exs_c_exm_num', 'exs_c_exm_num', 'exs_c_exm_num', 'exs_c_exm_num', 'exs_c_exm_num', 'exs_c_exm_cod', 'exs_c_exm_cod', 'exs_c_exm_cod', 'exs_c_exm_cod', 'exs_c_exm_cod', 'exs_c_pex_dthr', 'exs_c_pex_dthr', 'exs_c_pex_dthr', 'exs_c_pex_dthr', 'exs_c_pex_dthr', 'exs_c_pex_pac', 'exs_c_pex_pac', 'exs_c_pex_pac', 'exs_c_pex_pac', 'exs_c_pex_pac'],
        );
    }
}
