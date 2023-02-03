<?php

namespace App\Http\Controllers;

use App\Services\ResultService;
use Illuminate\Http\Request;

/**
 * 要項・結果
 *
 */
class ResultsController extends Controller
{
    public $resultService;

    /**
     * @param  App\Services\ResultService  $resultService
     */
    public function __construct(ResultService $resultService)
    {
        $this->resultService = $resultService;
    }

    /**
     * Results画面
     * 
     * @param  Illuminate\Http\Request  $request
     * @param  array  $archiveFiscalYearsList
     * @param  string  $fiscalYear
     * @param  string  $wareki
     * @param  array  $resultList
     */
    public function index(Request $request)
    {
        $archiveFiscalYearsList = $this->resultService->getArchiveFiscalYearList();
        $fiscalYear = $this->resultService->getFiscalYear($request->fiscalYear);
        $wareki = $this->resultService->wareki($fiscalYear);
        $resultList = $this->resultService->getEditedResultList($fiscalYear);

        return view('results.index')->with([
            'archiveYears' => $archiveFiscalYearsList,
            'fiscalYear' => $fiscalYear,
            'wareki' => $wareki,
            'resultList' => $resultList
        ]);
    }

    public function create()
    {
        return view('results.create');
    }
}
