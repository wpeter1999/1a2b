<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Playgame extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answer=str_pad(rand(0,9999), 4, "0", STR_PAD_LEFT);
        return view('1a2b',['answer' =>$answer]);
        //
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
        $number=$request->post('number');
        $answer=$request->post('answer');

        $num_array=array_map('intval',str_split($number));
        $ans_array=array_map('intval',str_split($answer));
        $a=0;
        $b=0;
        //dd($answer);
        for($i=0;$i<4;$i++){
            if($num_array[$i]==$ans_array[$i]){
                $a++;
            }
        }
        $b=count(array_intersect($num_array,$ans_array));
        return view('1a2b',['answer' =>$answer,'a'=>$a, 'b'=>$b]);
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
