// ABOUT ME
<script language="Javascript">
var limite=390;

function soma() {

  var mais_um=eval(document.form1.msg_about.value.length-1);
  mais_um++;

  if (document.form1.msg_about.value.length>limite)
  {
    document.form1.msg_about.value='';
    document.form1.msg_about.value=valor_limite;
    alert("Você deve digitar no máximo "+limite+" caracteres");
  }
  else
  {
    document.form1.exibe.value='';
    document.form1.exibe.value=eval(mais_um);
    valor_limite=document.form1.msg_about.value;
    document.form1.exibe2.value='';
    document.form1.exibe2.value=(limite-mais_um);
  }

  document.form1.msg_about.focus();
}

function mostra_tamanho(){
  document.form1.exibe2.value=limite;
}
// limitar o textarea do texto 2
var limite2=232;

function soma2() {

  var mais_um2=eval(document.form1.msg_about_donw.value.length-1);
  mais_um2++;

  if (document.form1.msg_about_donw.value.length>limite2)
  {
    document.form1.msg_about_donw.value='';
    document.form1.msg_about_donw.value=valor_limite2;
    alert("Você deve digitar no máximo "+limite2+" caracteres");
  }
  else
  {
    document.form1.exibe3.value='';
    document.form1.exibe3.value=eval(mais_um2);
    valor_limite2=document.form1.msg_about_donw.value;
    document.form1.exibe4.value='';
    document.form1.exibe4.value=(limite2-mais_um2);
  }

  document.form1.msg_about_donw.focus();
}

function mostra_tamanho2(){
  document.form1.exibe4.value=limit2;
}
</script>

<div class="form-group">
  <label for="img_about">Imagem de "About Me"</label>
  <input type="file" name="img_about" id="img_about">
</div>

<div class="form-group">
  <label for="msg_about">Texto de "About Me"</label><br>
  <textarea name="msg_about" id="msg_about" rows="4" cols="50" onKeyPress="soma(this.value)" onKeyUp="soma(this.value)"></textarea><br>
  Caracteres digitados:
  <input style="border:none" name="exibe" type="text" class="formulario" value="0" size="2">
  Caracteres restantes:
  <input style="border:none" name="exibe2" type="text" class="formulario" size="2">
</div>

<div class="form-group">
  <label for="msg_about_donw">Texto em foco "About Me"</label><br>
  <textarea name="msg_about_donw" id="msg_about_donw" rows="4" cols="50" onKeyPress="soma2(this.value)" onKeyUp="soma2(this.value)"></textarea><br>
  Caracteres digitados:
  <input style="border:none" name="exibe3" type="text" class="formulario" value="0" size="2">
  Caracteres restantes:
  <input style="border:none" name="exibe4" type="text" class="formulario" size="2">
</div>
<hr>
// PLAYLIST DO TOPO
<div class="form-group">
  <label for="img_about">Texto em foco "About Me"</label><br>
  <input type="text" name="url_top" placeholder="Colar o número da playlist do SoundClound" size="70">
</div>
<hr>
// ALBUM RELEASES

<div class="row">
  <div class="col-md-12">
    <div class="col-md-6">
      <div class="form-group">
        <label for="f1">Primeira Imagem de "Album Releases"</label>
        <input type="file" name="f1" id="f1">
        <label for="f1">Título da Primeira Imagem de "Album Releases"</label>
        <input type="text" name="t1" id="t1" size="35">
        <label title="Colar o link do SoundClound" for="f1">Música da Primeira Imagem de "Album Releases"</label>
        <input type="text" name="u1" id="u1" placeholder="Colar o número da música do SoundClound" size="35">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="f2">Segunda Imagem de "Album Releases"</label>
        <input type="file" name="f2" id="f2">
        <label for="f2">Título da Segunda Imagem de "Album Releases"</label>
        <input type="text" name="t2" id="t2" size="35">
        <label title="Colar o link do SoundClound" for="f2">Música da Segunda Imagem de "Album Releases"</label>
        <input type="text" name="u2" id="u2" placeholder="Colar o número da música do SoundClound" size="35">
      </div>
    </div>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-6">
      <div class="form-group">
        <label for="img_about">Terceira Imagem de "Album Releases"</label>
        <input type="file" name="f3" id="f3">
        <label for="f3">Título da Terceira Imagem de "Album Releases"</label>
        <input type="text" name="t3" id="t3" size="35">
        <label title="Colar o link do SoundClound" for="f2">Música da Terceira Imagem de "Album Releases"</label>
        <input type="text" name="u3" id="u3" placeholder="Colar o número da música do SoundClound" size="35">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="img_about">Quarta Imagem de "Album Releases"</label>
        <input type="file" name="f4" id="f4">
        <label for="f4">Título da Quarta Imagem de "Album Releases"</label>
        <input type="text" name="t4" id="t4" size="35">
        <label title="Colar o link do SoundClound" for="f2">Música da Quarta Imagem de "Album Releases"</label>
        <input type="text" name="u4" id="u4" placeholder="Colar o número da música do SoundClound" size="35">
      </div>
    </div>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-12">
    <div class="col-md-6">
      <div class="form-group">
        <label for="img_about">Quinta Imagem de "Album Releases"</label>
        <input type="file" name="f5" id="f5">
        <label for="f5">Título da Quinta Imagem de "Album Releases"</label>
        <input type="text" name="t5" id="t5" size="35">
        <label title="Colar o link do SoundClound" for="f2">Música da Quinta Imagem de "Album Releases"</label>
        <input type="text" name="u5" id="u5" placeholder="Colar o número da música do SoundClound" size="35">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="img_about">Sexta Imagem de "Album Releases"</label>
        <input type="file" name="f6" id="f6">
        <label for="f6">Título da Sexta Imagem de "Album Releases"</label>
        <input type="text" name="t6" id="t6" size="35">
        <label title="Colar o link do SoundClound" for="f2">Música da Sexta Imagem de "Album Releases"</label>
        <input type="text" name="u6" id="u6" placeholder="Colar o número da música do SoundClound" size="35">
      </div>
    </div>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-12">
    <div class="col-md-6">
      <div class="form-group">
        <label for="img_about">Sétima Imagem de "Album Releases"</label>
        <input type="file" name="f7" id="f7">
        <label for="f7">Título da Sétima Imagem de "Album Releases"</label>
        <input type="text" name="t7" id="t7" size="35">
        <label title="Colar o link do SoundClound" for="f2">Música da Sétima Imagem de "Album Releases"</label>
        <input type="text" name="u7" id="u7" placeholder="Colar o número da música do SoundClound" size="35">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="img_about">Oitava Imagem de "Album Releases"</label>
        <input type="file" name="f8" id="f8">
        <label for="f8">Título da Oitava Imagem de "Album Releases"</label>
        <input type="text" name="t8" id="t8" size="35">
        <label title="Colar o link do SoundClound" for="f2">Música da Oitava Imagem de "Album Releases"</label>
        <input type="text" name="u8" id="u8" placeholder="Colar o número da música do SoundClound" size="35">
      </div>
    </div>
  </div>
</div>
<hr>

<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<button type="submit" class="btn btn-success">Salvar</button>
