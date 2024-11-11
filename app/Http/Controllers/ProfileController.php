<?php

namespace App\Http\Controllers;
use App\Mail\AccountDeletedMail;
use App\Models\HealthSheet;
use App\Models\SheetNutritional;
use App\Models\Travel;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        //Guardado de variables para el envió de correo posterior a la eliminación del usuario
        $email=$user->email;
        $email_deleted=new AccountDeletedMail($user);

        Auth::logout();

        //No existe relacion por modelo :(
        //Todo: Cambiar la verificación del modelo eliminando por cascada en relación polimorfica :D

        //Eliminación por búsqueda de usuario
        HealthSheet::where('userID',$user->id)->delete();
        SheetNutritional::where('userID',$user->id)->delete();
        $user->delete();

        Mail::to($email)->send($email_deleted);


        $request->session()->invalidate();
        $request->session()->regenerateToken();



        return Redirect::to('/');
    }
}
