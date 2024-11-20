<?php

namespace App\Http\Controllers;

use LDAP\Result;
use App\Models\User;
use App\Models\Setting;
use App\Models\ResultRoot;
use App\Models\SchoolClass;
use App\Models\ResultUpload;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportCardPdfController extends Controller
{
    // public function downloadReportCards($recordId)
    // {
    //     // Fetch the data based on the recordId
    //     $record = ResultRoot::findOrFail($recordId);
    //     $resultUploads = ResultUpload::where('result_root_id', $recordId)->get();

    //     $resultsByClass = [];
    //     $classNames = [];

    //     foreach ($resultUploads as $resultUpload) {
    //         $class = SchoolClass::find($resultUpload->class_id);
    //         $className = $class->name ?? 'Unknown Class';

    //         $resultsByClass[$resultUpload->class_id][] = $resultUpload;
    //         $classNames[$resultUpload->class_id] = $className;
    //     }

    //     // Pass data to the PDF view
    //     $pdf = Pdf::loadView('pdf.report-cards', [
    //         'record' => $record,
    //         'resultsByClass' => $resultsByClass,
    //         'classNames' => $classNames,
    //     ]);

    //     // Return the generated PDF for download
    //     return $pdf->download('report-cards.pdf');
    // }


    public function downloadReportCards($recordId)
{
    $record = ResultRoot::findOrFail($recordId); 
    $resultUploads = ResultUpload::where('result_root_id', $recordId)->get();
    $schoolDetails = getSchoolDetails();

   

    $pdf = Pdf::loadView('pdf.report-cards', compact(
        'record', 
        'resultUploads', 
        'schoolDetails', 
    ));

    return $pdf->download('report-cards.pdf');
}

}
