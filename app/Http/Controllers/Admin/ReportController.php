<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Berkas;
use App\Http\Requests\Admin\BerkasRequest;
use Carbon\Carbon;
use PDF;
// use Illuminate\Http\Request;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Storage;
// use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Berkas::with(['lowongan', 'biodata'])                    
                    ->get();
    
        
        return view('pages.admin.report.index',[
            'items' => $items
        ]);
        // $items = Berkas::with([
        //  'lowongan', 'biodata'
        // ])->get();
        
        // $programs = Program::all();
        // $lowongans = Lowongan::all();

        // return view('pages.user.report.index',[
        //     'items' => $items
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $request)
    {
        $data = $request->all();

        Berkas::create($data);
        return redirect()->route('report.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Berkas::with([
         'lowongan', 'biodata'
        ])->findOrFail($id);

        return view('pages.admin.report.detail',[
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Berkas::findOrFail($id);

        return view('pages.admin.report.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $request, $id)
    {
        $data = $request->all();

        $item = Berkas::findOrFail($id);

        $item->update($data);

        return redirect()->route('report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Berkas::findorFail($id);
        $item->delete();

        return redirect()->route('report.index');

    }

public function returnReport()
{
    $start = Carbon::now()->startOfMonth()->format('Y-m-d H:i:s');
    $end = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');

    if (request()->date != '') {
        $date = explode(' - ' ,request()->date);
        $start = Carbon::parse($date[0])->format('Y-m-d') . ' 00:00:01';
        $end = Carbon::parse($date[1])->format('Y-m-d') . ' 23:59:59';
    }

    $berkas = Berkas::with(['lowongan', 'biodata'])->whereBetween('created_at', [$start, $end])->get();
    return view('pages.admin.report.return', compact('berkas'));
}

public function returnReportPdf($daterange)
{
    $date = explode('+', $daterange);
    $start = Carbon::parse($date[0])->format('Y-m-d') . ' 00:00:01';
    $end = Carbon::parse($date[1])->format('Y-m-d') . ' 23:59:59';

    $berkas = Berkas::with(['lowongan', 'biodata'])->whereBetween('created_at', [$start, $end])->get();
    $pdf = PDF::loadView('pages.admin.report.return_pdf', compact('berkas', 'date'));
    return $pdf->stream();
}

}

