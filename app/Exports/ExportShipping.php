<?php

namespace App\Exports;

use DB;
// use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB as FacadesDB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;



class ExportShipping implements FromCollection, WithHeadings
{


    // protected $data;
    // public function __construct($data)
    // {
    //     $this->data = $data;
    // }



    // /**
    //  * @return View
    //  */
    // public function view(): View
    // {
    //     return view('shipping_bosta');
    // }

    public function headings(): array
    {




        // according to shipping table




        return [

            "Order Id",
            "first_name",
            "last_name",
            "Email Address",
            "Phone No.",
            "sub_total",
            "quantity",
        ];
    }




    public function collection()
    {

        $usersData = FacadesDB::table('orders')->where('shipping_id', '=', 5)->get();


        return collect($usersData);
    }
}
