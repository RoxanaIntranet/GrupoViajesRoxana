<?php

namespace App\Http\Controllers;

use App\Models\CreateTravels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CreateGroups;
class CreateTravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        /*$groups = $user->groups;*/ // Obtén los grupos a los que está asociado el usuario
        // Obtener todos los grupos a los que pertenece el usuario
        $groups = $user->groups()->with('travel')->get();

        return view('users.viajes', compact('groups'));
    }


    public function showTripDetails($groupId)
    {
        $group = CreateGroups::with('travel')->find($groupId);

        if ($group) {
            $viaje = $group->travel;
            $viaje->groupID = $groupId;
            return view('users.tu-viaje', compact('viaje','group'));
        } else {
            // Manejar el caso donde no se encuentra el grupo o viaje
            return redirect()->route('users.viaje')->with('error', 'Viaje no encontrado.');
        }
    }

    public function downloadItinerario($groupId)
    {
        return $this->downloadFile($groupId, 'itinerario');
    }
    public function downloadIndicaciones($groupId)
    {
        return $this->downloadFile($groupId, 'indicaciones');
    }
    public function downloadRecomendaciones($groupId)
    {
        return $this->downloadFile($groupId, 'recomendaciones');
    }
    public function downloadRopaViaje($groupId)
    {
        return $this->downloadFile($groupId, 'ropa_viaje');
    }
    public function downloadPermisoNotarial($groupId)
    {
        return $this->downloadFile($groupId, 'permiso_notarial');
    }
    public function downloadVoucher($groupId)
    {
        return $this->downloadFile($groupId, 'voucher');
    }
    public function downloadListaClinicas($groupId)
    {
        return $this->downloadFile($groupId, 'lista_clinicas');
    }

    public function downloadFile($groupId, $columnName)
    {
        $group = CreateGroups::with('travel')->find($groupId);

    if ($group && $group->travel && $group->travel->$columnName) {
        $filePath = 'pdfs/' . $group->travel->$columnName;

        if (file_exists(public_path($filePath))) {
            return response()->download(public_path($filePath), $group->travel->$columnName, [
                'Content-Type' => 'application/pdf',
            ]);
        } else {
            return redirect()->back()->with('error', ucfirst($columnName) . ' no encontrado.');
        }
    }

    return redirect()->route('dashboard')->with('error', 'Viaje no encontrado.');
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
     * @param  \App\Models\CreateTravels  $createTravels
     * @return \Illuminate\Http\Response
     */
    public function show(CreateTravels $createTravels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateTravels  $createTravels
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateTravels $createTravels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateTravels  $createTravels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateTravels $createTravels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateTravels  $createTravels
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateTravels $createTravels)
    {
        //
    }
}
