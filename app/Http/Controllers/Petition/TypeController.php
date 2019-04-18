<?php

namespace App\Http\Controllers\Petition;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PetitionType;
use App\Models\TypeSection;
use Illuminate\Support\Collection;
use App\Http\Requests\RequestPetitionTypes;
use App\Models\PetitionSection;

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
        $types = DB::table('petition_types')->select('petition_types.id','petition_types.header_address','petition_types.header_num_process','petition_types.header_culprit','petition_types.header_name_action','petition_types.header_author')                                              
                                            ->where('petition_types.deleted_at',null)    
                                            ->get();   
        $listaTypes = new Collection();

        foreach($types as  $type){

        $list_types = PetitionType::where('id',$type->id)->get()->first();
        $list_types->header_address = PetitionType::headerAddress($type->header_address);
        $list_types->header_num_process = PetitionType::headerNumProcess($type->header_num_process);
        $list_types->header_culprit = PetitionType::headerCulprit($type->header_culprit);
        $list_types->header_name_action = PetitionType::headerNameAction($type->header_name_action);
        $list_types->header_author = PetitionType::headerAuthor($type->header_author);
        $list_types->sections;
        $listaTypes->push($list_types);        
        }
        return $listaTypes;
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
    public function store(RequestPetitionTypes $request)
    {                      
        $item = new PetitionType();
        $item->title = $request->title;
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

          foreach($request->section_ids as $id){

                $section_types = new TypeSection();
                $section_types->petition_type_id = $item->id;
                $section_types->petition_section_id = $id;
                $section_types->save();             
            }
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
        $item =  PetitionType::findOrFail($id);

        $item->sections;

        $sections = PetitionSection::all();
        
        return view('petitions.types.edit',compact('item','sections'));       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestPetitionTypes $request,$id)
    {
        $item = PetitionType::findOrFail($id);
        $item->title = $request->title;
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

        return $item;
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

    public function btnActive($id){

        $item =  PetitionType::findOrFail($id);

        if($item->active == 0 ){
            $item->active = 1;
            $item->save();
        }else{
            $item->active = 0;
            $item->save();
        }
        
        return $item;
    }
}

/*  $list_types->id    
         
            $list_types->header_name_action =
