<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Restore softdeleted data
        // Visitor::withTrashed()
        //         ->where('id', 1)
        //         ->restore();

        // Fetch all data
        $visitors = Visitor::all();
        return view('admin.pengunjung', compact('visitors'));
    }

    /**
     * Show summary of all data
     * 
     */
    public function summary(){
        $today = DB::table('visitors')->whereDate('created_at', date('Y-m-d'))->sum('jumlah');
        $month = DB::table('visitors')->whereMonth('created_at', date('m'))->sum('jumlah');
        $total = count(Visitor::all());
        $turis = DB::table('visitors')->where('asal', '<>', 'Indonesia')->sum('jumlah');
        $data = collect([
            'today'=>$today, 
            'month'=>$month,
            'turis'=>$turis,
            'total'=>$total,
        ]);
        $data->toJson();
        return response()->json($data, 200);
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
    public function store(Request $request)
    {
        // Insert into table
        // Request obtained from kunjungan form
        // Validate before store the data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jumlah' => 'integer|required',
        ]);
        Visitor::create($request->all());
        return redirect('/kunjungan')->with('status', 'Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        // Delete data using softdelete
        Visitor::destroy($visitor->id);
        return redirect('admin/daftar');
    }
}
