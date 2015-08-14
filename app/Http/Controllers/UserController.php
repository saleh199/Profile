<?php

namespace Profile\Http\Controllers;

use Illuminate\Http\Request;

use Profile\User;
use Profile\Http\Requests;
use Profile\Http\Controllers\Controller;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getShow($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function putUpdate(Request $request, $id)
    {
        $user = User::find($id);

        if($user === null){
            return response()->json(['error' => 'Not Found User'])->setStatusCode(400);
        }

        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required|email',
        ]);

        $user->update($request->all());

        return response()->json(['result' => 'ok']);

    }
}
