<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasswordSolution;
use Illuminate\Database\Eloquent\Collection;

class OvejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function getScientist()
    {

        $fields = ['id', 'name', 'element', 'discovery-year', 'text', 'code', 'image'];

        $data = PasswordSolution::query()->select($fields)->where('code', 'is not', 'null')->inRandomOrder()->limit(1)->get();
        $data = $data->merge(PasswordSolution::query()->select($fields)->where('code', 'is', 'null')->inRandomOrder()->limit(3)->get());

        return response()->json($data);
    }
}
