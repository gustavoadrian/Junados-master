<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Materia;
use App\Comision;
use App\Comisioncomun;
use App\Comisioninicial;
use App\Inicial;
use App\MateriasCom;

class PagesController extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function login(){
        return view('admin/login');
    }

    public function aulas(){
        return view('aulas');
    }
    public function iniciales(){
        return view('paginaIniciales');
    }

    public function mapas(){
        return view('mapas');
    }

    public function oficinas(){
        return view('oficinas');
    }

    public function carreras($id = null)
    {
        $carreras = Carrera::where('instituto_id', $id)->get();
        $idCarrera=$id;
        return view('carreras', compact('carreras'),compact('idCarrera'));
    }
    public function materiasComunes($id = null)
    {
        $materias = MateriasCom::where('instituto_id', $id)->get();

        return $materias;
    }

    public function materiasIniciales()
    {
        $materias = Inicial::all();

        return $materias;
    }
    public function materias($id = null)
    {
        $materias = Materia::where('carrera_id', $id)->get();

        return $materias;
    }
    public function listarComisiones($id = null)
    {
        //$comisions = Comision::where('materia_id', $id)->get();
        $comisions=Comision::select('comisions.nombre as comision','m.nombre as materia','p.nombre','p.apellido')
        ->join('materias as m','comisions.materia_id','=','m.id')
        ->join('profesors as p','comisions.profesor_id','=','p.id')
        //->join('inicials as i','comisions.inicial_id','=','i.id')
        ->join('aulas as a','comisions.aula_id','=','a.id')
        //->join('materias_coms as ma','comisions.comunes_id','=','ma.id')
        ->join('edificios as e','a.edificio_id','=','e.id')
        ->join('sedes as s','e.sede_id','=','s.id')
        ->where('m.id',$id)
        //->where('i.nombre','')
        //->where('ma.nombre','')
        ->distinct()
        ->get();

        $copia=Comision::select('comisions.nombre as comision','comisions.horario as horario','comisions.dia as dia','m.nombre as materia','a.numero as aula','a.piso as piso','p.nombre','p.apellido','e.nombre as edificio','s.nombre as sede','s.calleynum as direccion','e.id as edificioId','e.imagen as imagen')
        ->join('materias as m','comisions.materia_id','=','m.id')
        ->join('profesors as p','comisions.profesor_id','=','p.id')
        ->join('aulas as a','comisions.aula_id','=','a.id')
        //->join('inicials as i','comisions.inicial_id','=','i.id')
        //->join('materias_coms as ma','comisions.comunes_id','=','ma.id')
        ->join('edificios as e','a.edificio_id','=','e.id')
        ->join('sedes as s','e.sede_id','=','s.id')
        ->where('m.id',$id)
        //->where('i.nombre','')
        //->where('ma.nombre','')
        ->get();
        //dd($comisions);
        // HACER PAGINA DE AULAS
        return view('comision',compact('comisions','copia'));
    }

    public function listarComisionesComunes($id = null)
    {
        //$comisions = Comision::where('materia_id', $id)->get();
        $comisions=Comisioncomun::select('comisioncomuns.nombre as comision','m.nombre as materia','p.nombre','p.apellido')
        ->join('materias_coms as m','comisioncomuns.materiacomun_id','=','m.id')
        ->join('profesors as p','comisioncomuns.profesor_id','=','p.id')
        //->join('inicials as i','comisions.inicial_id','=','i.id')
        ->join('aulas as a','comisioncomuns.aula_id','=','a.id')
        //->join('materias_coms as ma','comisions.comunes_id','=','ma.id')
        ->join('edificios as e','a.edificio_id','=','e.id')
        ->join('sedes as s','e.sede_id','=','s.id')
        ->where('m.id',$id)
        //->where('i.nombre','')
        //->where('ma.nombre','')
        ->distinct()
        ->get();

        $copia=Comisioncomun::select('comisioncomuns.nombre as comision','comisioncomuns.horario as horario','comisioncomuns.dia as dia','m.nombre as materia','a.numero as aula','a.piso as piso','p.nombre','p.apellido','e.nombre as edificio','s.nombre as sede','s.calleynum as direccion','e.id as edificioId','e.imagen as imagen')
        ->join('materias_coms as m','comisioncomuns.materiacomun_id','=','m.id')
        ->join('profesors as p','comisioncomuns.profesor_id','=','p.id')
        ->join('aulas as a','comisioncomuns.aula_id','=','a.id')
        //->join('inicials as i','comisions.inicial_id','=','i.id')
        //->join('materias_coms as ma','comisions.comunes_id','=','ma.id')
        ->join('edificios as e','a.edificio_id','=','e.id')
        ->join('sedes as s','e.sede_id','=','s.id')
        ->where('m.id',$id)
        //->where('i.nombre','')
        //->where('ma.nombre','')
        ->get();
        //dd($comisions);
        // HACER PAGINA DE AULAS
        return view('comision',compact('comisions','copia'));
    }

    public function listarComisionesIniciales($id = null)
    {
        //$comisions = Comision::where('materia_id', $id)->get();
        $comisions=Comisioninicial::select('comisioninicials.nombre as comision','m.nombre as materia','p.nombre','p.apellido')
        ->join('inicials as m','comisioninicials.materiainicial_id','=','m.id')
        ->join('profesors as p','comisioninicials.profesor_id','=','p.id')
        //->join('inicials as i','comisions.inicial_id','=','i.id')
        ->join('aulas as a','comisioninicials.aula_id','=','a.id')
        //->join('materias_coms as ma','comisions.comunes_id','=','ma.id')
        ->join('edificios as e','a.edificio_id','=','e.id')
        ->join('sedes as s','e.sede_id','=','s.id')
        ->where('m.id',$id)
        //->where('i.nombre','')
        //->where('ma.nombre','')
        ->distinct()
        ->get();

        $copia=Comisioninicial::select('comisioninicials.nombre as comision','comisioninicials.horario as horario','comisioninicials.dia as dia','m.nombre as materia','a.numero as aula','a.piso as piso','p.nombre','p.apellido','e.nombre as edificio','s.nombre as sede','s.calleynum as direccion','e.id as edificioId','e.imagen as imagen')
        ->join('inicials as m','comisioninicials.materiainicial_id','=','m.id')
        ->join('profesors as p','comisioninicials.profesor_id','=','p.id')
        ->join('aulas as a','comisioninicials.aula_id','=','a.id')
        //->join('inicials as i','comisions.inicial_id','=','i.id')
        //->join('materias_coms as ma','comisions.comunes_id','=','ma.id')
        ->join('edificios as e','a.edificio_id','=','e.id')
        ->join('sedes as s','e.sede_id','=','s.id')
        ->where('m.id',$id)
        //->where('i.nombre','')
        //->where('ma.nombre','')
        ->get();
        //dd($comisions);
        // HACER PAGINA DE AULAS
        return view('comision',compact('comisions','copia'));
    }



}
