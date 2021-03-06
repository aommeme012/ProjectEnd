<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderDetail extends Model
{
    protected $table= 'purchase_orders_detail';
    protected $primaryKey= 'Pdetail_Id';

    protected $fillable = [
        'Pdetail_Amount',
        'Material_Id',
        'Purchase_Id',
    ];
}
