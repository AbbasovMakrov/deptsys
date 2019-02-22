<?php

namespace App\Http\Controllers;

use App\Dept;
use Illuminate\Http\Request;

class DeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all=Dept::OrderBy('date','desc')->paginate(4);
        $countData=Dept::count();
        return view('pages.HomePage',['data'=>$all,'count'=>$countData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'money'=>'required',
            'product' => 'required'
        ]);
        $dept = new Dept();
        $dept->name = $request->name;
        $dept->money = $request->money;
        $dept->date = date("Y-m-d");
        $dept->arrived = $request->arrived;
        $dept->product = $request->product;
        if ($request->arrived != null){
            $dept->left = $request->money - $request->arrived;
        }else{
            $dept->left = $request->money;
        }
        $dept->save();
        return redirect('/')->with('status','تم الحفظ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if (empty($id)){
            return redirect('/')->with('error','لايمكن ان تكون عملية التعديل بدون ID');
        }
        if ($request->isMethod('put')){
            $dept=Dept::where('id',$id)->first();
            if (count($dept)>0){
                $request->validate([
                    'name'=>'required',
                    'money'=>'required',
                    'product' => 'required'
                ]);
                $dept->name = $request->name;
                $dept->money= $request->money;
                $dept->date = date("Y-m-d");
                $dept->arrived = $request->arrived;
                if ( $request->arrived != null){
                    $dept->left = $request->money - $request->arrived;
                }else{
                    $dept->left = $request->money;
                }
                $dept->save();
                return redirect('/')->with('status','تم تحديث السجل');
            }
            else{
                return redirect('/')->with('error','السجل غير موجود');
            }
        }else{
            $dept=Dept::where('id',$id)->first();
            if (count($dept)>0){
                return view('pages.edit',['data'=>$dept]);
            }
            else{
                return redirect('/')->with('error','السجل غير موجود');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!empty($id)){
            $whereid=Dept::where('id',$id)->first();
            if (count($whereid)>0){
                $whereid->delete();
                return redirect('/')->with('status','تم الحذف');
            }else{
                return redirect('/')->with('error','لايوجد سجل ');
            }
        }else{
            return redirect('/')->with('error','لايوجد سجل ');
        }
    }
    function search(Request $request){
            if ($request->isMethod('post')){
                $search=Dept::where('name','like','%'.$request->name.'%')->get();
                return view('pages.search',['data'=>$search]);
            }else{
                return view('pages.search');
            }
    }
}