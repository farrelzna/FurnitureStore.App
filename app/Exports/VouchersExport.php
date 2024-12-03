<?php

namespace App\Exports;

use App\Models\Voucher;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class VouchersExport implements FromCollection, WithHeadings, ShouldQueue, ShouldAutoSize, WithStyles, WithMapping, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Voucher::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Description',
            'Discount(Price)',
            'Stock',
            'Type',
            'image',
            'Created At',
        ];
    }

    public function map($voucher): array
    {
        return [
            $voucher->id,
            $voucher->name,
            $voucher->description,
            $voucher->discount,
            $voucher->stock,
            $voucher->type,
            $voucher->image,
            $voucher->created_at ? $voucher->created_at->format('Y-m-d H:i:s') : 'N/A',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $highestRow = $sheet->getHighestRow();

        return [
            // Style untuk header
            1 => [
                'font' => [
                    'bold' => true,
                    'color' => ['rgb' => 'FFFFFF'],
                    'size' => 12,
                ],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID,
                    'startColor' => ['rgb' => 'blue'],
                ],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER,
                ],
            ],
            // Style untuk seluruh cell
            "A1:E$highestRow" => [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['rgb' => '000000'],
                    ],
                ],
                'alignment' => [
                    'vertical' => Alignment::VERTICAL_CENTER,
                ],
            ],
        ];
    }

public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet;
                $highestRow = $sheet->getHighestRow();

                // Atur tinggi baris untuk header
                $sheet->getRowDimension(1)->setRowHeight(25);

                // Bungkus teks di kolom tertentu
                $sheet->getStyle("D2:D$highestRow")
                    ->getAlignment()
                    ->setWrapText(true);

                // Atur lebar kolom tertentu
                $sheet->getColumnDimension('D')->setWidth(30);

                // Membekukan baris pertama
                $sheet->freezePane('A2');
            },
        ];
    }
}