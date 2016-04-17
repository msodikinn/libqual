<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\LayananKriteria;
use App\LayananKriteriasICs;
use App\LayananKriteriasLP;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index(Request $request)
    {
        $q = $request->get('q');
        $kriterias = LayananKriteria::where('name', 'LIKE', '%'.$request->get('q').'%')->paginate(10);
        return view('kriterias.index', compact('kriterias','q'));
    }

        public function indexIC(Request $request)
    {
        $q = $request->get('q');
        $kriteriasic = LayananKriteriasICs::where('name', 'LIKE', '%'.$request->get('q').'%')->paginate(10);
        return view('kriterias.kriteriasic', compact('kriteriasic','q'));
    }


        public function indexLP(Request $request)
    {
        $q = $request->get('q');
        $kriteriaslp = LayananKriteriasLP::where('name', 'LIKE', '%'.$request->get('q').'%')->paginate(10);
        return view('kriterias.kriteriaslp', compact('kriteriaslp','q'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
