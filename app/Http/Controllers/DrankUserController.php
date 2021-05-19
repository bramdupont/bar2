<?php

namespace App\Http\Controllers;

use App\Models\drank_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DrankUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $user_id = auth()->id();
        return  DB::table('drank_user')
            ->where('user_id', '=', $user_id)
            ->get();
    }

    public function getSingle($id) {
        $user_id = auth()->id();
        return  DB::table('drank_user')
            ->where('user_id', '=', $user_id)
            ->where('drank_id', '=', $id)
            ->get();
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
    public function update(Request $request, $id, $amount)
    {
        $existingDrank = drank_user::where('drank_id', '=', $id)->first();
        if($existingDrank) {
            $oldAmount = $existingDrank->amount;
            $newAmount = $oldAmount + $amount;
            $existingDrank->update(['amount' => $newAmount]);
            return "Item succesfully updated." . $newAmount;
        }

        return "Item not found";
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
