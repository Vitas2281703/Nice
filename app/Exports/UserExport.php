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

class UserExport implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize, WithEvents, WithMapping
{
    use Exportable;

    private Collection $users;
    public function __construct(Collection $users)
    {
        $this->users = $users;
    }

    public function collection()
    {
        return $this->users;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Заказы. Дата экспорта ' . Carbon::now();
    }

    /**
     * @param $user
     * @return array
     */
    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->email,
            $user->phone,
            $user->bonus,
            $user->created_at,
            $user->updated_at,
        ];
    }


    public function headings(): array
    {
        return [
            'id' => 'id',
            'name' => 'Имя',
            'email' => 'Почта',
            'phone' => 'Телефон',
            'bonus' => 'Бонусы',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлен',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {

                $event->sheet->getDelegate()->getStyle('A1:G1')
                    ->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setRGB('efaaa8');
            },
        ];
    }
}
