<?php

namespace App\Http\Controllers;

use App\Models\CreatePayments;
use Illuminate\Support\Facades\Auth;
use App\Models\CreateGroups;
use App\Models\Travel;
use App\Models\GroupUser;
use App\Models\Quota;
use Illuminate\Http\Request;

class CreatePaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // Obtener todos los grupos a los que pertenece el usuario con sus respectivos viajes
        $groups = $user->groups()->with('travel')->get();

        return view('users.mis-pagos', compact('groups'));
    }

    public function showTravelStatus($groupId)
{
    // Obtener el grupo con el viaje relacionado
    $group = CreateGroups::with('travel')->find($groupId);

    if (!$group || !$group->travel) {
        return redirect()->route('dashboard')->with('error', 'Viaje no encontrado.');
    }

    // Obtener el registro de group_user correspondiente al usuario actual
    $groupUser = GroupUser::where('group_id', $groupId)
        ->where('user_id', Auth::id()) // Asegúrate de que sea para el usuario autenticado
        ->first();

    if (!$groupUser) {
        return redirect()->route('dashboard')->with('error', 'No se encontró un grupo válido para este usuario.');
    }

    // Obtener las cuotas relacionadas con este group_user
    $quotas = $groupUser->quotas()->orderBy('quota')->get();

    // Pasar los datos a la vista
    return view('users.mi-estado', [
        'travel' => $group->travel,
        'group' => $group,
        'quotas' => $quotas,
    ]);
}


public function showPaymentSchedule($groupId)
{
    // Obtener el grupo con el viaje relacionado
    $group = CreateGroups::with('travel')->find($groupId);

    if (!$group || !$group->travel) {
        return redirect()->route('dashboard')->with('error', 'Viaje no encontrado.');
    }

    // Obtener el registro de group_user correspondiente al usuario actual
    $groupUser = GroupUser::where('group_id', $groupId)
        ->where('user_id', Auth::id()) // Asegúrate de que sea para el usuario autenticado
        ->first();

    if (!$groupUser) {
        return redirect()->route('dashboard')->with('error', 'No se encontró un grupo válido para este usuario.');
    }

    // Obtener las cuotas relacionadas con este group_user
    $quotas = $groupUser->quotas()->orderBy('quota')->get();

    // Obtener el tipo de moneda desde el viaje relacionado
    $tipo_moneda = $group->travel->tipo_moneda;

    // Pasar los datos a la vista
    return view('users.mi-cronograma', [
        'travel' => $group->travel,
        'group' => $group,
        'quotas' => $quotas,
        'tipo_moneda' => $tipo_moneda,
    ]);
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
     * @param  \App\Models\CreatePayments  $createPayments
     * @return \Illuminate\Http\Response
     */
    public function show(CreatePayments $createPayments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreatePayments  $createPayments
     * @return \Illuminate\Http\Response
     */
    public function edit(CreatePayments $createPayments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreatePayments  $createPayments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreatePayments $createPayments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreatePayments  $createPayments
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreatePayments $createPayments)
    {
        //
    }
}
