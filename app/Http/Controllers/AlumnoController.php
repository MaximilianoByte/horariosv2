<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $alumnos;
    public $val;
    function __construct() {
        $this->alumnos = Alumno::paginate(5);
        $this->val = [
            'nombre' => ['required', 'min:3', 'max:50', 'regex:/^[\p{L} ]+$/u'],
            'apellido' => 'required',
            'email' => 'required'
        ];
    }
    
    public function index()
    {
        
        return view("alumnos2/index", ["alumnos" => $this->alumnos]);
    }

    public function create()
    {
        $alumno = new Alumno;
        $pars = [
            "alumnos" => $this->alumnos,
            "alumno" => $alumno, 
            "accion" => "C", 
            "des" => "", 
            "txtbtn" => "Insertar"
        ];
        return view("alumnos2/frm", $pars);
    }

    public function store(Request $request)
    {
        $validado = $request->validate($this->val);
        Alumno::create($validado);

        return redirect()->route("alumnos.index")->with('mensaje', 'El registro se Inserto correctamente');
    }

    public function show(Alumno $alumno)
    {
        return view("alumnos2/frm", [
            'alumnos' => $this->alumnos,
            "alumno" => $alumno,
            "accion" => "S",
            "des" => "disabled",
            "txtbtn" => "Eliminar"
        ]);
    }

    public function edit(Alumno $alumno)
    {
        return view("alumnos2/frm", [
            "alumnos" => $this->alumnos,
            "alumno" => $alumno,
            "accion" => "E",
            "des" => "",
            "txtbtn" => "Actualizar"
        ]);
    }

    public function update(Request $request, Alumno $alumno)
    {
        $validado = $request->validate($this->val);
        $alumno->update($validado);
        return redirect()->route("alumnos.index")->with('mensaje', 'El registro se Actualizo correctamente');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('mensaje', 'El registro se Elimino correctamente');
    }
}
