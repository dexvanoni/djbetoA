<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Html;
use Illuminate\Support\Facades\DB;
use App\Edition;

class EditionController extends Controller
{
  private $edition;

  public function __construct(Edition $edition)
  {
    $this->edition = $edition;
  }

  public function site(){

    //fazer a pesquisa no banco e mandar pra view as pesquisas gravadas
    //pega o último registro gravado no banco
    //ficar somente um registro no banco (somente editar o já existente)

    $edition = Edition::all();
    $editions = $edition->last();

    return view('inicio', compact('editions'));

  }

  public function index()
  {

    $edition = Edition::orderBy('id', 'DESC')->paginate(1000);


    return view('editar.index', compact('edition'));

  }

  public function create(){

    $edition = $this->edition->all();

    return view('editar.create', compact('edition'));

  }

  public function store(Request $request){

    if (Input::file('img_about')){

      $img_about = Input::file('img_about');
      $ext_about = $img_about-> getClientOriginalExtension();
      if($ext_about != 'jpg' && $ext_about != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f1')){

      $f1 = Input::file('f1');
      $ext_f1 = $f1-> getClientOriginalExtension();
      if($ext_f1 != 'jpg' && $ext_f1 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f2')){

      $f2 = Input::file('f2');
      $ext_f2 = $f2-> getClientOriginalExtension();
      if($ext_f2 != 'jpg' && $ext_f2 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f3')){

      $f3 = Input::file('f3');
      $ext_f3 = $f3-> getClientOriginalExtension();
      if($ext_f3 != 'jpg' && $ext_f3 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f4')){

      $f4 = Input::file('f4');
      $ext_f4 = $f4-> getClientOriginalExtension();
      if($ext_f4 != 'jpg' && $ext_f4 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f5')){

      $f5 = Input::file('f5');
      $ext_f5 = $f5-> getClientOriginalExtension();
      if($ext_f5 != 'jpg' && $ext_f5 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f6')){

      $f6 = Input::file('f6');
      $ext_f6 = $f6-> getClientOriginalExtension();
      if($ext_f6 != 'jpg' && $ext_f6 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f7')){

      $f7 = Input::file('f7');
      $ext_f7 = $f7-> getClientOriginalExtension();
      if($ext_f7 != 'jpg' && $ext_f7 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f8')){

      $f8 = Input::file('f8');
      $ext_f8 = $f8-> getClientOriginalExtension();
      if($ext_f8 != 'jpg' && $ext_f8 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f1_e')){

      $f1_e = Input::file('f1_e');
      $ext_f1_e = $f1_e-> getClientOriginalExtension();
      if($ext_f1_e != 'jpg' && $ext_f1_e != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f2_e')){

      $f2_e = Input::file('f2_e');
      $ext_f2_e = $f2_e-> getClientOriginalExtension();
      if($ext_f2_e != 'jpg' && $ext_f2_e != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f3_e')){

      $f3_e = Input::file('f3_e');
      $ext_f3_e = $f3_e-> getClientOriginalExtension();
      if($ext_f3_e != 'jpg' && $ext_f3_e != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f4_e')){

      $f4_e = Input::file('f4_e');
      $ext_f4_e = $f4_e-> getClientOriginalExtension();
      if($ext_f4_e != 'jpg' && $ext_f4_e != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f1_b')){

      $f1_b = Input::file('f1_b');
      $ext_f1_b = $f1_b-> getClientOriginalExtension();
      if($ext_f1_b != 'jpg' && $ext_f1_b != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f2_b')){

      $f2_b = Input::file('f2_b');
      $ext_f2_b = $img_f2_b-> getClientOriginalExtension();
      if($ext_f2_b != 'jpg' && $ext_f2_b != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f3_b')){

      $f3_b = Input::file('f3_b');
      $ext_f3_b = $img_f3_b-> getClientOriginalExtension();
      if($ext_f3_b != 'jpg' && $ext_f3_b != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f4_b')){

      $f4_b = Input::file('f4_b');
      $ext_f4_b = $img_f4_b-> getClientOriginalExtension();
      if($ext_f4_b != 'jpg' && $ext_f4_b != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    $edition = Edition::create($request->all());

    //move as imagens
    if(Input::file('img_about')){
      $imageTempName = $request->file('img_about')->getPathname();
      $imageName = $request->file('img_about')->getClientOriginalName();
      $imageNameCorrect = 'id_img_about'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('img_about')->move($path , $imageNameCorrect);
      DB::table('editions')->where('img_about', $imageTempName)->update(['img_about' => $imageNameCorrect]);
    }
    /*  File::move($img_about,public_path().'/images/id_img_about'.$edition->id.'.'.$ext_about);
      $edition->img_about = '/images/id_img_about'.$edition->id.'.'.$ext_about;
      $edition->save;
    }*/
    if(Input::file('f1')){
      $imageTempName = $request->file('f1')->getPathname();
      $imageName = $request->file('f1')->getClientOriginalName();
      $imageNameCorrect = 'id_f1'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f1')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f1', $imageTempName)->update(['f1' => $imageNameCorrect]);
    }
    if(Input::file('f2')){
      $imageTempName = $request->file('f2')->getPathname();
      $imageName = $request->file('f2')->getClientOriginalName();
      $imageNameCorrect = 'id_f2'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f2')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f2', $imageTempName)->update(['f2' => $imageNameCorrect]);
    }
    if(Input::file('f3')){
      $imageTempName = $request->file('f3')->getPathname();
      $imageName = $request->file('f3')->getClientOriginalName();
      $imageNameCorrect = 'id_f3'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f3')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f3', $imageTempName)->update(['f3' => $imageNameCorrect]);
    }
    if(Input::file('f4')){
      $imageTempName = $request->file('f4')->getPathname();
      $imageName = $request->file('f4')->getClientOriginalName();
      $imageNameCorrect = 'id_f4'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f4')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f4', $imageTempName)->update(['f4' => $imageNameCorrect]);
    }
    if(Input::file('f5')){
      $imageTempName = $request->file('f5')->getPathname();
      $imageName = $request->file('f5')->getClientOriginalName();
      $imageNameCorrect = 'id_f5'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f5')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f5', $imageTempName)->update(['f5' => $imageNameCorrect]);
    }
    if(Input::file('f6')){
      $imageTempName = $request->file('f6')->getPathname();
      $imageName = $request->file('f6')->getClientOriginalName();
      $imageNameCorrect = 'id_f6'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f6')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f6', $imageTempName)->update(['f6' => $imageNameCorrect]);
    }
    if(Input::file('f7')){
      $imageTempName = $request->file('f7')->getPathname();
      $imageName = $request->file('f7')->getClientOriginalName();
      $imageNameCorrect = 'id_f7'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f7')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f7', $imageTempName)->update(['f7' => $imageNameCorrect]);
    }
    if(Input::file('f8')){
      $imageTempName = $request->file('f8')->getPathname();
      $imageName = $request->file('f8')->getClientOriginalName();
      $imageNameCorrect = 'id_f8'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f8')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f8', $imageTempName)->update(['f8' => $imageNameCorrect]);
    }
    //----------
    if(Input::file('f1_e')){
      $imageTempName = $request->file('f1_e')->getPathname();
      $imageName = $request->file('f1_e')->getClientOriginalName();
      $imageNameCorrect = 'id_f1_e'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f1_e')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f1_e', $imageTempName)->update(['f1_e' => $imageNameCorrect]);
    }
    if(Input::file('f2_e')){
      $imageTempName = $request->file('f2_e')->getPathname();
      $imageName = $request->file('f2_e')->getClientOriginalName();
      $imageNameCorrect = 'id_f2_e'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f2_e')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f2_e', $imageTempName)->update(['f2_e' => $imageNameCorrect]);
    }
    if(Input::file('f3_e')){
      $imageTempName = $request->file('f3_e')->getPathname();
      $imageName = $request->file('f3_e')->getClientOriginalName();
      $imageNameCorrect = 'id_f3_e'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f3_e')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f3_e', $imageTempName)->update(['f3_e' => $imageNameCorrect]);
    }
    if(Input::file('f4_e')){
      $imageTempName = $request->file('f4_e')->getPathname();
      $imageName = $request->file('f4_e')->getClientOriginalName();
      $imageNameCorrect = 'id_f4_e'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f4_e')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f4_e', $imageTempName)->update(['f4_e' => $imageNameCorrect]);
    }
    if(Input::file('f1_b')){
      $imageTempName = $request->file('f1_b')->getPathname();
      $imageName = $request->file('f1_b')->getClientOriginalName();
      $imageNameCorrect = 'id_f1_b'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f1_b')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f1_b', $imageTempName)->update(['f1_b' => $imageNameCorrect]);
    }
    if(Input::file('f2_b')){
      $imageTempName = $request->file('f2_b')->getPathname();
      $imageName = $request->file('f2_b')->getClientOriginalName();
      $imageNameCorrect = 'id_f2_b'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f2_b')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f2_b', $imageTempName)->update(['f2_b' => $imageNameCorrect]);
    }
    if(Input::file('f3_b')){
      $imageTempName = $request->file('f3_b')->getPathname();
      $imageName = $request->file('f3_b')->getClientOriginalName();
      $imageNameCorrect = 'id_f3_b'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f3_b')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f3_b', $imageTempName)->update(['f3_b' => $imageNameCorrect]);
    }
    if(Input::file('f4_b')){
      $imageTempName = $request->file('f4_b')->getPathname();
      $imageName = $request->file('f4_b')->getClientOriginalName();
      $imageNameCorrect = 'id_f4_b'.$edition->id.$imageName;
      $path = public_path().'/images/';
      $request->file('f4_b')->move($path , $imageNameCorrect);
      DB::table('editions')->where('f4_b', $imageTempName)->update(['f4_b' => $imageNameCorrect]);
    }

    Session::flash('mensagem_create', 'Seu site foi atualizado com sucesso!');

    return redirect()->route('editar.index');

  }

  public function destroy($id){

    $edition = Edition::find($id);

    $edition->delete();
    Session::flash('mensagem_del', "Antigas alterações deletadas com Sucesso!");
    return redirect()->route('editar.index');

  }

}
