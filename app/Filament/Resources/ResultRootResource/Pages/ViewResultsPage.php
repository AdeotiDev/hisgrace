<?php
namespace App\Filament\Resources\ResultRootResource\Pages;

use App\Models\ResultUpload;
use App\Filament\Resources\ResultRootResource;
use App\Models\ResultRoot;
use Filament\Resources\Pages\Page;

class ViewResultsPage extends Page
{
    protected static string $resource = ResultRootResource::class;

    protected static string $view = 'filament.resources.result-root-resource.pages.view-results-page';

    public $resultUploads;
    public ResultRoot $record;
    public $schoolDetails;
    

    public function mount(ResultRoot $record)
    {


        $this->schoolDetails = getSchoolDetails();

        $this->record = $record;
        // Fetch result uploads for the specific result root record
        $this->resultUploads = ResultUpload::where('result_root_id', $record->id)->get();
        // $this->resultUploads = ResultUpload::where('result_root_id', $record->id)->paginate(2)->withQueryString();
        // dd($this->record);
    }

    public function getTitle(): string
    {
        return '';
    }
}
