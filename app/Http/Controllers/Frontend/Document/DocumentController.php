<?php

namespace App\Http\Controllers\Frontend\Document;

use App\Http\Controllers\Controller;
use App\Repositories\Frontend\Document\DocumentRepository;
use App\Http\Requests\Frontend\Document\DownloadDocumentRequest;
use App\Http\Requests\Frontend\Document\ManageDocumentRequest;

/**
 * Class DocumentController.
 */
class DocumentController extends Controller
{
    /**
     * @var DocumentRepository
     */
    protected $documents;

    /**
     * @param DocumentRepository       $documents
     */
    public function __construct(DocumentRepository $documents)
    {
        $this->documents = $documents;
    }

    /**
     * @param ManageDocumentRequest $request
     *
     * @return mixed
     */
    public function index(ManageDocumentRequest $request)
    {
        return view('frontend.index');
    }

    /**
     * @param DownloadDocumentRequest $request
     *
     * @return mixed
     */
    public function download(DownloadDocumentRequest $request)
    {
        //$this->documents->download($request->only('nome', 'processo', 'doe', 'datadoe', 'cpfcnpj', 'ait', 'aitvenc', 'valor'));
        
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app/TemplateWeb.docx'));
        
        $templateProcessor->setValue('PA', $request->processo);
        $templateProcessor->setValue('NOME', $request->nome);
        $templateProcessor->setValue('CPFCNPJ', $request->cpfcnpj);
        $templateProcessor->setValue('AIT', $request->ait);
        $templateProcessor->setValue('AITVENC', $request->aitvenc);
        $templateProcessor->setValue('DOE', $request->doe);
        $templateProcessor->setValue('DATADOE', $request->datadoe);
        $templateProcessor->setValue('VALOR', $request->valor);
        
        $templateProcessor->saveAs(storage_path('app/' . $request->processo . '.docx'));
        
        return response()->download(storage_path('app/' . $request->processo . '.docx'))->deleteFileAfterSend(true);

    }

}
