<?php

namespace App\Http\Controllers\Petition;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PetitionType;

class TypeController extends Controller
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
        return   view('petitions.types.index');
    }

    public function list(){
        $types = DB::table('petition_types')->select('petition_types.id','petition_types.title','petition_types.header_address','petition_types.header_num_process','petition_types.header_author','petition_types.header_culprit','petition_types.header_name_action','petition_sections.title as title_section','petition_types.active')
                                                ->leftjoin('petition_sections','petition_types.petition_section_id','petition_sections.id')
                                                ->where('petition_types.deleted_at',null)    
                                                ->get();
        return  $types;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $itens = DB::table('petition_sections')->select('petition_sections.*')
                                                        ->where('deleted_at',null)    
                                                        ->get();
        return view('petitions.types.create',compact('itens'));
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
            'petition_section_id'=>'required', 
            'header_address'=>'required', 
            'header_culprit'=>'required', 
            'header_num_process'=>'required', 
            'header_name_action'=>'required', 
            'header_author'=>'required',        
            ],

            [
                'title.required'=>'Campo Título obrigatório.',
                'petition_section_id.required'=>'Campo Seção obrigatório.', 
                'header_address.required'=>'Campo Cabeçalho obrigatório.', 
                'header_culprit.required'=>'Campo Réu obrigatório.', 
                'header_num_process.required'=>'Campo Num Processo obrigatório.', 
                'header_name_action.required'=>'Campo Nome Ação obrigatório.', 
                'header_author.required'=>'Campo Autor obrigatório.',  
            ]
        );

        $item = new PetitionType();

        $item->title = $request->title;
        $item->petition_section_id= $request->petition_section_id;
        $item->header_address =$request->header_address; 
        $item->header_culprit =$request->header_culprit; 
        $item->header_num_process =$request->header_num_process;
        $item->header_name_action=$request->header_name_action;
        $item->header_author =$request->header_author;
        $item->active = 1;      

        DB::beginTransaction();
        try
        {   
            $item->save();
            DB::commit(); 
            return redirect(route('types.index'))->with('mensagem_sucesso', 'Tipo adicionada com sucesso');
        }
        catch(\Exception $ex)                   
        {
            DB::rollBack();
            return redirect(route('types.create', $item->id))->withErrors($ex->getMessage())->withInput();
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
        $sections = DB::table('petition_sections')->select('petition_sections.id','petition_sections.title')                                                
                                                ->where('deleted_at',null)    
                                                ->get();
       $item =  DB::table('petition_types')->select('petition_types.id','petition_types.petition_section_id','petition_types.title','petition_types.header_address','petition_types.header_num_process','petition_types.header_author','petition_types.header_culprit','petition_types.header_name_action','petition_types.active')
                                            ->where('petition_types.id',$id)        
                                                ->where('petition_types.deleted_at',null)    
                                                ->first();

        return  view('petitions.types.edit',compact('item','sections'));
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
        $this->validate($request, [
            'title'=>'required',
            'petition_section_id'=>'required', 
            'header_address'=>'required', 
            'header_culprit'=>'required', 
            'header_num_process'=>'required', 
            'header_name_action'=>'required', 
            'header_author'=>'required',        
            ],

            [
                'title.required'=>'Campo Título obrigatório.',
                'petition_section_id.required'=>'Campo Seção obrigatório.', 
                'header_address.required'=>'Campo Cabeçalho obrigatório.', 
                'header_culprit.required'=>'Campo Réu obrigatório.', 
                'header_num_process.required'=>'Campo Num Processo obrigatório.', 
                'header_name_action.required'=>'Campo Nome Ação obrigatório.', 
                'header_author.required'=>'Campo Autor obrigatório.',  
            ]
        );
        $item = PetitionType::findOrFail($id);

        $item->title = $request->title;
        $item->petition_section_id= $request->petition_section_id;
        $item->header_address =$request->header_address; 
        $item->header_culprit =$request->header_culprit; 
        $item->header_num_process =$request->header_num_process;
        $item->header_name_action=$request->header_name_action;
        $item->header_author =$request->header_author;
                
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
            return redirect(route('types.index'))->with('mensagem_sucesso', 'Tipo adicionada com sucesso');
        }
        catch(\Exception $ex)                   
        {
            DB::rollBack();
            return redirect(route('types.edit', $item->id))->withErrors($ex->getMessage())->withInput();
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
        $type = PetitionType::findOrFail($id);
        $type->delete(); 
    }
}
