<?php

namespace App\Http\Controllers;

use App\Models\GroupUser;
use App\Models\Quota;
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
        //return $group_user;
        //dd($id_group_user);
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
        // Obtener todos los datos del formulario
        $data = $request->all();
    //return $data;
        // Filtrar solo las cuotas (fecha y precio)
        $cuotas = [];

        foreach ($data as $key => $value) {
            if (str_starts_with($key, 'fecha_')) {
                // Extraer el índice numérico de la cuota
                $index = str_replace('fecha_', '', $key);
                $cuotas[$index]['fecha'] = $value;
            } elseif (str_starts_with($key, 'precio_')) {
                // Extraer el índice numérico de la cuota
                $index = str_replace('precio_', '', $key);
                $cuotas[$index]['precio'] = $value;
            }
        }

        // Ordenar las cuotas por índice
        ksort($cuotas);

        // Aquí puedes procesar o almacenar las cuotas
        foreach ($cuotas as $i => $cuota) {
            // Ejemplo: Guardar cada cuota en la base de datos
            Quota::create([
                'group_user' => $request->input('id_group_user'),
                'codigo' => $request->input('codigo_viaje'),
                'quota' => $i,
                'amount' => $cuota['precio'],
                'date' => $cuota['fecha'],
                'status_pay' => '0',
                'valid_status' => '0',
                'resume' => $i.' cuota',
            ]);
        }

        return redirect()->route('payments_admin.index')->with('success', 'Cuotas registradas exitosamente.');

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
