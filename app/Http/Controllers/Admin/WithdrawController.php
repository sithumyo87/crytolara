<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Http\Requests\Admin\WithdrawEditRequest;

class WithdrawController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        $withdraws = Withdraw::getPagination();
        $start          = ((($request->page ?? 1) * paginateCount()) - paginateCount()) + 1;
        $active         = 'withdraw';
        $title          = 'Withdraws';
        return view('admin.withdraw.index', compact('active', 'title', 'withdraws', 'start'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(WithdrawEditRequest $request, string $id)
    {
        $validated = $valdata = $request->validated();
        foreach($valdata as $key => $value){
            if($valdata[$key] == null){
                unset($validated[$key]);
            }
        }
        $withdraw = Withdraw::findOrFail($id)->update($validated);
        return redirect()->route('admin.withdraw.index')->with(['success_msg'=> 'Withdraw updated successfully!']);
    }

}
