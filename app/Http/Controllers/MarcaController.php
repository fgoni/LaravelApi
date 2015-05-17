<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Marca;
use \Input;

class MarcaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return Marca::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Marca::create(array(
            'name' => Input::get('marca'),
        ));

        return Response::json(array('success' => true));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
        return Marca::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        Marca::destroy($id);
        return Response::json(array('success' => true));
    }

}
