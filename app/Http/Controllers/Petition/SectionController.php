<?php

namespace App\Http\Controllers\Petition;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PetitionSection;

class SectionController extends Controller
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
       return view('petitions.sections.index');
    }

    public function list(){
        $sections = DB::table('petition_sections')->select('petition_sections.*')
                                                    ->where('deleted_at',null)    
                                                    ->get();
        return  $sections;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create(){
        return view('petitions.sections.create');
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
            'description'=>'required',        
            ],
            [
                'title.required'=>'Adicione um Título.'   ,
                'description.required'=>'Adicione uma Descrição.'   
            ]
        );
        
        $item = new PetitionSection();

        $item->title = $request->title;
        $item->description = $request->description;

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
            return redirect()->route('sections.index')->with('success', 'Cadastro realizado com sucesso!');
        }
        catch(\Exception $ex)                   
        {
            DB::rollBack();
            return redirect()->route('sections.create', $item->id)->with('error', 'Erro ao cadastrar');
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = PetitionSection::findOrFail($id);

        return view('petitions.sections.edit',compact('item'));
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

        $item = PetitionSection::findOrFail($id);

        $item->title = $request->title;
        $item->description = $request->description;

        if($request->active != null){
            $item->active = 1;
        }else{
            $item->active = 0;
        }

        DB::beginTransaction();
        try
        {   
            $item->update();
            DB::commit(); 
            return redirect(route('sections.index'))->with('mensagem_sucesso', 'Seção Editado com sucesso');
        }
        catch(\Exception $ex)                   
        {
            DB::rollBack();
            return redirect(route('sections.create', $item->id))->withErrors($ex->getMessage())->withInput();
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
        $sections = PetitionSection::findOrFail($id);  
        $sections->delete();      
    }


    public function testDelete(){
        $sections = DB::table('petition_sections')->select('petition_sections.id')                                                               
                                                            ->where('deleted_at',null)    
                                                            ->get();  
        return  view('petitions.sections.test',compact('sections'));
    }
}
