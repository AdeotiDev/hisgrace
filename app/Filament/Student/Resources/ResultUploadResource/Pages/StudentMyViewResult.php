<?php

namespace App\Filament\Student\Resources\ResultUploadResource\Pages;

use App\Filament\Student\Resources\ResultUploadResource;
use App\Models\ResultRoot;
use App\Models\ResultUpload;
use Filament\Resources\Pages\Page;

class StudentMyViewResult extends Page
{
    protected static string $resource = ResultUploadResource::class;

    protected static string $view = 'filament.student.resources.result-upload-resource.pages.student-my-view-result';

    public ResultRoot $record;
    public $schoolDetails;
    public $resultUploads;
    public $resultRoot;


    public function mount(ResultRoot $record)
    {


        $this->schoolDetails = getSchoolDetails();
        $this->record = $record;


        // $this->resultRoot = $record->resultRoot;

        $this->record = $record;
        // Fetch result uploads for the specific result root record
        // $this->resultRoot = ResultUpload::where('id', $record->id)->value('result_root_id');
        $this->resultUploads = ResultUpload::where('result_root_id',$this->record->id)->get();

       





        
    }

    public function getTitle(): string
    {
        return '';
    }
}
