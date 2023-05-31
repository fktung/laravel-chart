<?php

namespace App\Http\Controllers;

use App\Charts\PegawaiAgeChart;
use App\Charts\PegawaiPositionChart;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PegawaiPositionChart $chart, PegawaiAgeChart $chartAge)
    {
        if (session('massage')) {
            toastr()->success(session('massage'));
        }
        $pegawai = Pegawai::all();
        return view('home', [
            "pegawai" => $pegawai,
            "chart" => $chart->build(),
            "chartAge" => $chartAge->build()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pegawai/add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'office' => 'required',
            'age' => 'required|numeric',
            'start_date' => 'required',
        ]);
        try {
            Pegawai::create([
                "name" => ucwords($request['name']),
                "position" => strtoupper($request['position']),
                "office" => ucwords($request['office']),
                "age" => $request['age'],
                "start_date" => $request['start_date'],
            ]);
        } catch (\Throwable $th) {
            dump($request);
            dd($th);
        }
        return redirect("/")->with('massage', 'Pegawai Berhasih Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        if (!$pegawai) {
            return redirect("/");
        }
        return view("pegawai/edit", compact("pegawai"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'office' => 'required',
            'age' => 'required|numeric',
            'start_date' => 'required',
        ]);
        $pegawai = Pegawai::find($id);
        if (!$pegawai) {
            return redirect("/");
        }
        Pegawai::where('id', $pegawai->id)
            ->update([
                "name" => ucwords($request['name']),
                "position" => strtoupper($request['position']),
                "office" => ucwords($request['office']),
                "age" => $request['age'],
                "start_date" => $request['start_date'],
            ]);

        return redirect("/")->with('massage', 'Pegawai Berhasih Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        if (!$pegawai) {
            return redirect("/");
        }
        Pegawai::where('id', $pegawai->id)->delete();
        return redirect("/")->with('massage', 'Pegawai Berhasih Dihapus');
    }
}
