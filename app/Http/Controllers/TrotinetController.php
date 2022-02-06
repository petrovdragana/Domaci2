<?php

namespace App\Http\Controllers;
use App\Models\Trotinet;

use Illuminate\Http\Request;

class TrotinetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r = Trotinet::all();
        return view('trotinet.index')->with('r',$r);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trotinet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'model'=>'required',
            'boja'=>'required',
            'materijal'=>'required',
            'stanje'=>'required',
            'cena'=>'required',
            'brzina'=>'required',
            'snaga'=>'required',
     ]);
        $r = new Trotinet();
        $r->model = $request->input('model');
        $r->boja = $request->input('boja');
        $r->materijal = $request->input('materijal');
        $r->stanje = $request->input('stanje');
        $r->cena = $request->input('cena');
        $r->brzina = $request->input('brzina');
        $r->snaga = $request->input('snaga');
        $r->save();
        return redirect('/trotinet')->with('success','Novi trotinet je uspesno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $r = Trotinet::find($id);
        return view('trotinet.show')->with('r',$r);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $t = Trotinet::find($id);
        return view('trotinet.edit')->with('r',$t);
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
        $r = Trotinet::find($id);
        $r->model = $request->input('model');
        $r->boja = $request->input('boja');
        $r->materijal = $request->input('materijal');
        $r->stanje = $request->input('stanje');
        $r->cena = $request->input('cena');
        $r->brzina = $request->input('brzina');
        $r->snaga = $request->input('snaga');
        $r->save();
        return redirect('/trotinet')->with('success','Trotinet je uspesno azuriran!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t = Trotinet::find($id);
        $t->delete();
        return redirect('/trotinet')->with('success','Trotinet je uspesno izbrisan!');
    }
}
