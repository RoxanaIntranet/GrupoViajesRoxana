<?php

namespace App\Http\Controllers;

use App\Models\GroupUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passenger=User::all();
        return view('admin.show.payments', compact('passenger'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passengers=User::all();
        return view('admin.payments.show_users', compact('passengers'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  int  $id_user
     * @return \Illuminate\Http\Response
     */
    public function create_payments_users($id_user)
    {
        $passengers=User::find($id_user);
        $group_user=$passengers->groups;
        return view('admin.payments.payments_users', compact('group_user'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  int  id_group_user
     * @return \Illuminate\Http\Response
     */
    public function create_payments_users_quota($id_group_user)
    {
        $group_user=GroupUser::find($id_group_user);
        return view('admin.payments.quota', compact('group_user'));
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
