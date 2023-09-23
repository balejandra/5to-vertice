<?php

namespace App\Http\Controllers\Proyectos;

use App\Http\Controllers\Controller;
use App\Models\Proyectos\Notificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class NotificacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:listar-notificaciones', ['only' => ['index']]);
        $this->middleware('permission:consultar-notificaciones', ['only' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();
        $notificaciones = Notificacion::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        $this->statusNotificaciones();
        return view('proyectos/notificaciones/index')
            ->with('notificaciones', $notificaciones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $data)
    {
        $validator = Validator::make($data, Notificacion::$rules);

        if ($validator->fails()) {
            // Handle the case where validation fails
            return $errors = $validator->errors();
        } else {
            // Validation passed, proceed with saving the data
            $notificacion = new Notificacion($data);
            $notificacion->save();
            return $notificacion;
            // Use $notificacionId as needed
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Notificacion $notificacion)
    {
        // dd($notificacion);
        $notificacion = Notificacion::findOrFail($notificacion->id);
        $this->statusNotificaciones();
        // Marcar la notificación como leída
        if ($notificacion->visto == false) {
            $notificacion->visto = true;
            $notificacion->save();
        }

        return view('proyectos.notificaciones.show', compact('notificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function statusNotificaciones()
    {
        $userid = auth()->id();
        $notificaciones = Notificacion::where('user_id', $userid)->where('visto', false)->get();
        if (count($notificaciones) > 0) {
            session(['notificaciones' => count($notificaciones)]);
        } else {
            session(['notificaciones' => 0]);
        }
    }
}