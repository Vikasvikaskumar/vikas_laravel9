<?php

namespace App\Http\Controllers;

use App\Models\VikasController;
use Illuminate\Http\Request;
use Validator;

class VikasControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
  
  
        //    return response(['value'=>"not value"]);
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
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     'c_password' => 'required|same:password',
        // ]);

        // if($validator->fails()){
        //     return $this->sendError('Validation Error.', $validator->errors());       
        // }

        // $input = $request->all();
        // $input['password'] = bcrypt($input['password']);
        // $user = User::create($input);
        // $success['token'] =  $user->createToken('MyApp')->accessToken;
        // $success['name'] =  $user->name;
        return ['success'=>'1','error'=>"false",'messge'=>'success'];
       
  
        // return "testing";
        // return $this->sendResponse($success, 'User register successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VikasController  $vikasController
     * @return \Illuminate\Http\Response
     */
    public function show(VikasController $vikasController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VikasController  $vikasController
     * @return \Illuminate\Http\Response
     */
    public function edit(VikasController $vikasController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VikasController  $vikasController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VikasController $vikasController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VikasController  $vikasController
     * @return \Illuminate\Http\Response
     */
    public function destroy(VikasController $vikasController)
    {
        //
    }
}
