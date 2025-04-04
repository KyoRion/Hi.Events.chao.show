<?php

namespace HiEvents\Imports;

use HiEvents\Helper\IdHelper;
use HiEvents\Models\Order;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OrdersImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        return new Order([
            'short_id' => IdHelper::shortId(IdHelper::ORDER_PREFIX),
            'event_id' => 2,
            'total_before_additions' => 10000,
            'total_refunded' => 1,
            'total_gross' =>
        ]);
    }
}
