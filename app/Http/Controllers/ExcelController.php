<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

use Excel;

use App\Exports\ExportShipping;

class ExcelController extends Controller
{
    public function exportshippingData()
    {



        $fileName = 'shipping.xlsx';




        return Excel::download(new ExportShipping, $fileName);
    }
}
