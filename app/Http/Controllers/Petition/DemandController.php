<?php

namespace App\Http\Controllers\Petition;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PetitionDemand;

class DemandController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        return   view('petitions.demands.index');  
    }

    public function list(){
        $demands = DB::table('petition_demands')->select('petition_demands.*')
                                                    ->where('deleted_at',null)    
                                                    ->get();
        return  $demands;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petitions.demands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'content'=>'required',        
            ],
            [
                'title.required'=>'Adicione um Título.'   ,
                'content.required'=>'Adicione uma Descrição.'   
            ]
        );
        $item = new PetitionDemand();

        $item->title = $request->title;
        $item->content = $request->content;   
        $item->active = 1;
       

        DB::beginTransaction();
        try
        {   
            $item->save();
            DB::commit(); 
            return redirect(route('demands.index'))->with('mensagem_sucesso', 'Pedido adicionado com sucesso');
        }
        catch(\Exception $ex)                   
        {
            DB::rollBack();
            return redirect(route('demands.create', $item->id))->withErrors($ex->getMessage())->withInput();
        } 
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
        $item = PetitionDemand::findOrFail($id);

        return view('petitions.demands.edit',compact('item'));
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
        $item = PetitionDemand::findOrFail($id);

        $item->title = $request->title;
        $item->content = $request->content;

        if($request->active != null){
            $item->active = 1;
        }else{
            $item->active = 0;
        }

        DB::beginTransaction();
        try
        {   
            $item->save();
            DB::commit(); 
            return redirect(route('demands.index'))->with('mensagem_sucesso', 'Pedido editado com sucesso');
        }
        catch(\Exception $ex)                   
        {
            DB::rollBack();
            return redirect(route('demands.create', $item->id))->withErrors($ex->getMessage())->withInput();
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demand = PetitionDemand::findOrFail($id);
        $demand->delete();    
    }
}
