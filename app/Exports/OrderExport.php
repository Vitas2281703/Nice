<?php

namespace App\Exports;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;

class OrderExport implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize, WithEvents, WithMapping
{
    use Exportable;

    private Collection $orders;
    public function __construct(Collection $orders)
    {
        $this->orders = $orders;
    }

    public function collection()
    {
        return $this->orders;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Заказы. Дата экспорта ' . Carbon::now();
    }

    /**
     * @param $order
     * @return array
     */
    public function map($order): array
    {
        $sum = 0;
        foreach ($order->orderPoints as $point)
        {
            $sum += ($point->orderService->price * $point->amount);
        }
        return [
            'Заказ №' . $order->id,
            $sum - $order->bonuses,
            $order->status,
            $order->status_payment,
            $order->user->name,
            $order->user->email,
            $order->user->phone,
            $order->bonuses,
            $order->created_at,
            $order->updated_at,
        ];
    }


    public function headings(): array
    {
        return [
            'id' => 'Номер заказа',
            'sum' => 'Сумма заказа с учетом бонусов',
            'status' => 'Статус заказа',
            'status_payment' => 'Статус оплаты',
            'name' => 'Имя клиента',
            'email' => 'Email',
            'phone' => 'Телефон',
            'bonuses' => 'Бонсуы потраченные на заказ',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлен',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {

                $event->sheet->getDelegate()->getStyle('A1:J1')
                    ->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setRGB('efaaa8');
            },
        ];
    }
}
