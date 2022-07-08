<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admissao;
use Illuminate\Support\Facades\DB;

class AdmissaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissao = Admissao::all();
        return view ('admissao.consultarAdmissao')->with('admissao', $admissao);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admissao.cadastrarAdmissao');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);
        Admissao::create($input);
        return redirect('admissao')->with('flash_message', 'admissao Addedd!');  
        db::commit();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admissao = Admissao::find($id);
        return view('admissao.showAdmissao')->with('admissao', $admissao);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admissao = Admissao::find($id);
        return view('admissao.editAdmissao')->with('admissao', $admissao);
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
        $admissao = Admissao::find($id);
        $input = $request->all();
        $admissao->update($input);
        return redirect('admissao')->with('flash_message', 'admissao Updated!');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admissao::destroy($id);
        return redirect('admissao')->with('flash_message', 'Student deleted!');  
    }
}