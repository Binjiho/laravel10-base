<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class MemberExcel implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents, WithMapping
{
    private $userConfig;
    private $collection;
    private $total;
    private $row = 0;

    public function __construct($data)
    {
        $this->userConfig = getConfig('user');
        $this->collection = $data['collection'];
        $this->total = $data['total'];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->collection;
    }

    public function headings(): array
    {
        return [
            'No',
            'RegNum',
            'Country',
            'ID',
            'Name(Kor)',
            
            'Affiliation(Kor)',
            'Mobile Phone',
            'Title',
            'Degree',
            'Gender',

            'Address',
            'City',
            'Emergency Contact(Name)',
            'Emergency Contact(Relation)',
            'Emergency Contact(Email)',

            'Source',
            'Join Date',
            'Registration',
            'Abstract',
        ];
    }

    public function map($data): array
    {
        $userConfig = $this->userConfig;
        $reg_num = "S-".str_pad($data->sid ?? 1, 4, '0', STR_PAD_LEFT);

        $name = $data['first_name'].' '.$data['last_name'];
        if($data['country'] == '1'){
            $name.= '('.$data['name_kr'].')';
        }

        $affi = $data['affi'];
        if($data['country'] == '1'){
            $affi.= '('.$data['sosok_kr'].')';
        }

        $title = $userConfig['title'][$data['title']];
        if($data['title'] == 'Z'){
            $title.= '('.$data['title_etc'].')';
        }

        $degree = $userConfig['degree'][$data['degree']];
        if($data['degree'] == 'Z'){
            $degree.= '('.$data['degree_etc'].')';
        }

        $gender = $userConfig['gender'][$data['gender']];
        if($data['gender'] == 'Z'){
            $gender.= '('.$data['gender_etc'].')';
        }

        $selected = explode(',', $data['source']);
        $labels = array();
        foreach ($selected as $code) {
            $label = $userConfig['source'][$code] ?? $code;
            if ($code === 'Z' && !empty($data['source_etc'])) {
                $label .= ' (' . $data['source_etc'] . ')';
            }
            $labels[] = $label;
        }
        $source = implode(', ',$labels);

        return [
            $this->total - ($this->row++),
            $reg_num ?? '',
            $data->getCountry() ?? '',
            $data->uid ?? '',
            $name ?? '',

            $affi ?? '',
            $data->mobile ?? '',
            $title ?? '',
            $degree ?? '',
            $gender ?? '',

            $data->address ?? '',
            $data->city ?? '',
            $data['contact_first_name'].' '.$data['contact_last_name'],
            $data->contact_relation ?? '',
            $data->contact_email ?? '',

            $source ?? '',
            $data->created_at,
            'X',
            'X',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                // HTML을 허용할 셀 범위를 지정
                $event->sheet->getStyle("A:ZZ")->getAlignment()->setWrapText(true);

                // 텍스트 높이 가운데로 정렬
                $event->sheet->getStyle('A:ZZ')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

                // 텍스트 가운데로 정렬
                $event->sheet->getStyle('A:ZZ')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

                // 폰트 bold & size
                $event->sheet->getDelegate()->getStyle('A1:ZZ1')->getFont()->setBold(true)->setSize(12);
            },
        ];
    }
}
