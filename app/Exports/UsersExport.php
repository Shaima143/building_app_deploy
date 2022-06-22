<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
        //return User::where('id', '>', '3')->get();
    }


    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Age',
            'Created At',
            'Updated At',
        ];
    }
}
