<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromCollection, WithHeadings
{
    private $start;
    private $end;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Order::whereBetween('created_at', [$this->start, $this->end])->get();
    }

    /**
     * @inheritDoc
     */
    public function headings(): array
    {
        return [
            'id',
            'product_id',
            'deliveryman_id',
            'supervisor_id',
            'price',
            'address',
            'delivered',
            'created_at',
            'updated_at',
        ];
    }



}
