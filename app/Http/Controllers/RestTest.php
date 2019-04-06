<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestTest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petitons_types = DB::table('petition_types')->select('petition_types.*')->get();

        $petitons_types_ = DB::table('petition_types')->select('petition_types.title','petition_types.active','type_headers.header_name_action_id','petition_sections.title as title_section')
                                                        ->leftJoin('petition_sections','petition_types.petition_section_id','petition_sections.id')
                                                        ->leftJoin('type_headers','petition_types.type_header_id','type_headers.id')
                                                        ->leftJoin('header_addresses','petition_sections.header_name_action_id','header_addresses.id')
                                                        ->get();

        $type_headers   = DB::table('type_headers')->select('type_headers.*')->get();
        return compact('petitons_types_');
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
