<script language="Javascript">
var limite=600;

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
var limite2=300;

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

<!-- Scripts dos contadores de eventos -->

<script type="text/javascript">
var limite1_e=100;

function soma1_e() {

  var mais_um1_e=eval(document.form1.s1_e.value.length-1);
  mais_um1_e++;

  if (document.form1.s1_e.value.length>limite1_e)
  {
    document.form1.s1_e.value='';
    document.form1.s1_e.value=valor_limite1_e;
    alert("Você deve digitar no máximo "+limite1_e+" caracteres");
  }
  else
  {
    document.form1.exibe1_e.value='';
    document.form1.exibe1_e.value=eval(mais_um1_e);
    valor_limite1_e=document.form1.s1_e.value;
    document.form1.exibe21_e.value='';
    document.form1.exibe21_e.value=(limite1_e-mais_um1_e);
  }

  document.form1.s1_e.focus();
}

function mostra_tamanho1_e(){
  document.form1.exibe21_e.value=limite1_e;
}

var limite2_e=100;

function soma2_e() {

  var mais_um2_e=eval(document.form1.s2_e.value.length-1);
  mais_um2_e++;

  if (document.form1.s2_e.value.length>limite2_e)
  {
    document.form1.s2_e.value='';
    document.form1.s2_e.value=valor_limite2_e;
    alert("Você deve digitar no máximo "+limite2_e+" caracteres");
  }
  else
  {
    document.form1.exibe2_e.value='';
    document.form1.exibe2_e.value=eval(mais_um2_e);
    valor_limite2_e=document.form1.s2_e.value;
    document.form1.exibe22_e.value='';
    document.form1.exibe22_e.value=(limite2_e-mais_um2_e);
  }

  document.form1.s2_e.focus();
}

function mostra_tamanho2_e(){
  document.form1.exibe22_e.value=limite2_e;
}

var limite3_e=100;

function soma3_e() {

  var mais_um3_e=eval(document.form1.s3_e.value.length-1);
  mais_um3_e++;

  if (document.form1.s3_e.value.length>limite3_e)
  {
    document.form1.s3_e.value='';
    document.form1.s3_e.value=valor_limite3_e;
    alert("Você deve digitar no máximo "+limite3_e+" caracteres");
  }
  else
  {
    document.form1.exibe3_e.value='';
    document.form1.exibe3_e.value=eval(mais_um3_e);
    valor_limite3_e=document.form1.s3_e.value;
    document.form1.exibe23_e.value='';
    document.form1.exibe23_e.value=(limite3_e-mais_um3_e);
  }

  document.form1.s3_e.focus();
}

function mostra_tamanho3_e(){
  document.form1.exibe23_e.value=limite3_e;
}

var limite4_e=100;

function soma4_e() {

  var mais_um4_e=eval(document.form1.s4_e.value.length-1);
  mais_um4_e++;

  if (document.form1.s4_e.value.length>limite4_e)
  {
    document.form1.s4_e.value='';
    document.form1.s4_e.value=valor_limite4_e;
    alert("Você deve digitar no máximo "+limite4_e+" caracteres");
  }
  else
  {
    document.form1.exibe4_e.value='';
    document.form1.exibe4_e.value=eval(mais_um4_e);
    valor_limite4_e=document.form1.s4_e.value;
    document.form1.exibe24_e.value='';
    document.form1.exibe24_e.value=(limite4_e-mais_um4_e);
  }

  document.form1.s4_e.focus();
}

function mostra_tamanho4_e(){
  document.form1.exibe24_e.value=limite4_e;
}
</script>
<!-- Scripts dos contadores de Blogs -->
<script type="text/javascript">
var limite1_b=100;

function soma1_b() {

  var mais_um1_b=eval(document.form1.s1_b.value.length-1);
  mais_um1_b++;

  if (document.form1.s1_b.value.length>limite1_b)
  {
    document.form1.s1_b.value='';
    document.form1.s1_b.value=valor_limite1_b;
    alert("Você deve digitar no máximo "+limite1_b+" caracteres");
  }
  else
  {
    document.form1.exibe1_b.value='';
    document.form1.exibe1_b.value=eval(mais_um1_b);
    valor_limite1_b=document.form1.s1_b.value;
    document.form1.exibe21_b.value='';
    document.form1.exibe21_b.value=(limite1_b-mais_um1_b);
  }

  document.form1.s1_b.focus();
}

function mostra_tamanho1_b(){
  document.form1.exibe21_b.value=limite1_b;
}

var limite2_b=100;

function soma2_b() {

  var mais_um2_b=eval(document.form1.s2_b.value.length-1);
  mais_um2_b++;

  if (document.form1.s2_b.value.length>limite2_b)
  {
    document.form1.s2_b.value='';
    document.form1.s2_b.value=valor_limite2_b;
    alert("Você deve digitar no máximo "+limite2_b+" caracteres");
  }
  else
  {
    document.form1.exibe2_b.value='';
    document.form1.exibe2_b.value=eval(mais_um2_b);
    valor_limite2_b=document.form1.s2_b.value;
    document.form1.exibe22_b.value='';
    document.form1.exibe22_b.value=(limite2_b-mais_um2_b);
  }

  document.form1.s2_b.focus();
}

function mostra_tamanho2_b(){
  document.form1.exibe22_b.value=limite2_b;
}

var limite3_b=100;

function soma3_b() {

  var mais_um3_b=eval(document.form1.s3_b.value.length-1);
  mais_um3_b++;

  if (document.form1.s3_b.value.length>limite3_b)
  {
    document.form1.s3_b.value='';
    document.form1.s3_b.value=valor_limite3_b;
    alert("Você deve digitar no máximo "+limite3_b+" caracteres");
  }
  else
  {
    document.form1.exibe3_b.value='';
    document.form1.exibe3_b.value=eval(mais_um3_b);
    valor_limite3_b=document.form1.s3_b.value;
    document.form1.exibe23_b.value='';
    document.form1.exibe23_b.value=(limite3_b-mais_um3_b);
  }

  document.form1.s3_b.focus();
}

function mostra_tamanho3_b(){
  document.form1.exibe23_b.value=limite3_b;
}

var limite4_b=100;

function soma4_b() {

  var mais_um4_b=eval(document.form1.s4_b.value.length-1);
  mais_um4_b++;

  if (document.form1.s4_b.value.length>limite4_b)
  {
    document.form1.s4_b.value='';
    document.form1.s4_b.value=valor_limite4_b;
    alert("Você deve digitar no máximo "+limite4_b+" caracteres");
  }
  else
  {
    document.form1.exibe4_b.value='';
    document.form1.exibe4_b.value=eval(mais_um4_b);
    valor_limite4_b=document.form1.s4_b.value;
    document.form1.exibe24_b.value='';
    document.form1.exibe24_b.value=(limite4_b-mais_um4_b);
  }

  document.form1.s4_b.focus();
}

function mostra_tamanho4_b(){
  document.form1.exibe24_b.value=limite4_b;
}
</script>

<!-- ############################################################# -->
<div id="botoes">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-2">
        <center><a href="#" class="btn btn-primary" id="bt_aboutme"><span class="glyphicon glyphicon-user"></span> About-Me</a></center>
      </div>
      <div class="col-md-2">
        <center><a href="#" class="btn btn-primary" id="bt_settop"><span class="glyphicon glyphicon-volume-up"></span> SetMusic</a></center>
      </div>
      <div class="col-md-2">
        <center><a href="#" class="btn btn-primary" id="bt_albumrelease"><span class="glyphicon glyphicon-th"></span> Album Release</a></center>
      </div>
      <div class="col-md-2">
        <center><a href="#" class="btn btn-primary" id="bt_events"><span class="glyphicon glyphicon-calendar"></span> Events</a></center>
      </div>
      <div class="col-md-2">
        <center><a href="#" class="btn btn-primary" id="bt_blogs"><span class="glyphicon glyphicon-thumbs-up"></span> Blog</a></center>
      </div>
      <div class="col-md-2">
        <center><a href="#" class="btn btn-primary" id="bt_playlistdown"><span class="glyphicon glyphicon-equalizer"></span> Playlist</a></center>
      </div>
    </div>
  </div>
</div>
<hr>
<div id="aboutme">
  <div class="col-md-12 col-md-offset-3">
    // ABOUT ME
    <div class="form-group">
      <label for="img_about">Imagem de "About Me"</label>
      {!! Form::file('img_about', null, array('id' => 'img_about')) !!}
    </div>

    <div class="form-group">
      <label for="msg_about">Texto de "About Me"</label><br>
      {!! Form::textarea('msg_about', null, array('rows'=>'4', 'cols'=>'50', 'onKeyPress'=>'soma(this.value)',  'onKeyUp'=>'soma(this.value)')) !!}
      <br>
      Caracteres digitados:
      <input style="border:none" name="exibe" type="text" class="formulario" value="0" size="2">
      Caracteres restantes:
      <input style="border:none" name="exibe2" type="text" class="formulario" size="2">
    </div>

    <div class="form-group">
      <label for="msg_about_donw">Texto em foco "About Me"</label><br>
      {!! Form::textarea('msg_about_donw', null, array('rows'=>'4', 'cols'=>'50', 'onKeyPress'=>'soma2(this.value)',  'onKeyUp'=>'soma2(this.value)')) !!}
      <br>
      Caracteres digitados:
      <input style="border:none" name="exibe3" type="text" class="formulario" value="0" size="2">
      Caracteres restantes:
      <input style="border:none" name="exibe4" type="text" class="formulario" size="2">
    </div>
  </div>

</div>


<div id="settop">
  // SET MUSIC DO TOPO
  <div class="form-group">
    <label for="url_top">SetMusic do Topo</label><br>
    {{ Form::text('url_top', null, array('placeholder'=>'Colar o número do SET do SoundClound', 'size'=>'70')) }}
  </div>
  <hr>
</div>


<div id="albumrelease">
  // ALBUM RELEASES

  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <div class="form-group">
          <label for="f1">Primeira Imagem de "Album Releases"</label>
          {!! Form::file('f1', null, array('id' => 'f1')) !!}

          <label for="f1">Título da Primeira Imagem de "Album Releases"</label>
          {!! Form::text('t1', null, array('id' => 't1', 'size'=>'35')) !!}

          <label title="Colar o link do SoundClound" for="f1">Música da Primeira Imagem de "Album Releases"</label>
          {!! Form::text('u1', null, array('id' => 'u1', 'size'=>'35', 'placeholder'=>'Colar o número da música do SoundClound')) !!}

        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="f2">Segunda Imagem de "Album Releases"</label>
          {!! Form::file('f2', null, array('id' => 'f2')) !!}

          <label for="f2">Título da Segunda Imagem de "Album Releases"</label>
          {!! Form::text('t2', null, array('id' => 't2', 'size'=>'35')) !!}

          <label title="Colar o link do SoundClound" for="f2">Música da Segunda Imagem de "Album Releases"</label>
          {!! Form::text('u2', null, array('id' => 'u2', 'size'=>'35', 'placeholder'=>'Colar o número da música do SoundClound')) !!}

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
          {!! Form::file('f3', null, array('id' => 'f3')) !!}

          <label for="f3">Título da Terceira Imagem de "Album Releases"</label>
          {!! Form::text('t3', null, array('id' => 't3', 'size'=>'35')) !!}

          <label title="Colar o link do SoundClound" for="f2">Música da Terceira Imagem de "Album Releases"</label>
          {!! Form::text('u3', null, array('id' => 'u3', 'size'=>'35', 'placeholder'=>'Colar o número da música do SoundClound')) !!}

        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="img_about">Quarta Imagem de "Album Releases"</label>
          {!! Form::file('f4', null, array('id' => 'f4')) !!}

          <label for="f4">Título da Quarta Imagem de "Album Releases"</label>
          {!! Form::text('t4', null, array('id' => 't4', 'size'=>'35')) !!}

          <label title="Colar o link do SoundClound" for="f2">Música da Quarta Imagem de "Album Releases"</label>
          {!! Form::text('u4', null, array('id' => 'u4', 'size'=>'35', 'placeholder'=>'Colar o número da música do SoundClound')) !!}

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
          {!! Form::file('f5', null, array('id' => 'f5')) !!}

          <label for="f5">Título da Quinta Imagem de "Album Releases"</label>
          {!! Form::text('t5', null, array('id' => 't5', 'size'=>'35')) !!}

          <label title="Colar o link do SoundClound" for="f2">Música da Quinta Imagem de "Album Releases"</label>
          {!! Form::text('u5', null, array('id' => 'u5', 'size'=>'35', 'placeholder'=>'Colar o número da música do SoundClound')) !!}

        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="img_about">Sexta Imagem de "Album Releases"</label>
          {!! Form::file('f6', null, array('id' => 'f6')) !!}

          <label for="f6">Título da Sexta Imagem de "Album Releases"</label>
          {!! Form::text('t6', null, array('id' => 't6', 'size'=>'35')) !!}

          <label title="Colar o link do SoundClound" for="f2">Música da Sexta Imagem de "Album Releases"</label>
          {!! Form::text('u6', null, array('id' => 'u6', 'size'=>'35', 'placeholder'=>'Colar o número da música do SoundClound')) !!}

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
          {!! Form::file('f7', null, array('id' => 'f7')) !!}

          <label for="f7">Título da Sétima Imagem de "Album Releases"</label>
          {!! Form::text('t7', null, array('id' => 't7', 'size'=>'35')) !!}

          <label title="Colar o link do SoundClound" for="f2">Música da Sétima Imagem de "Album Releases"</label>
          {!! Form::text('u7', null, array('id' => 'u7', 'size'=>'35', 'placeholder'=>'Colar o número da música do SoundClound')) !!}

        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="img_about">Oitava Imagem de "Album Releases"</label>
          {!! Form::file('f8', null, array('id' => 'f8')) !!}

          <label for="f8">Título da Oitava Imagem de "Album Releases"</label>
          {!! Form::text('t8', null, array('id' => 't8', 'size'=>'35')) !!}

          <label title="Colar o link do SoundClound" for="f2">Música da Oitava Imagem de "Album Releases"</label>
          {!! Form::text('u8', null, array('id' => 'u8', 'size'=>'35', 'placeholder'=>'Colar o número da música do SoundClound')) !!}

        </div>
      </div>
    </div>
  </div>
  <hr>
</div>

<div id="events">
  // EVENTS
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <div class="form-group">
          <label for="f1_e">Foto do Primeiro Evento</label>
          {!! Form::file('f1_e', null, array('id' => 'f1_e')) !!}

          <label for="t1_e">Título do primeiro Evento</label><br>
          {!! Form::text('t1_e', null, array('id' => 't1_e', 'size'=>'33', 'maxlength'=>'30')) !!}
          <br>
          <label for="s1_e">Texto do primeiro Evento</label><br>
          {!! Form::textarea('s1_e', null, array('rows'=>'2', 'cols'=>'33', 'onKeyPress'=>'soma1_e(this.value)',  'onKeyUp'=>'soma1_e(this.value)')) !!}
          <br>
          Caracteres digitados:
          <input style="border:none" name="exibe1_e" type="text" class="formulario" value="0" size="2">
          Caracteres restantes:
          <input style="border:none" name="exibe21_e" type="text" class="formulario" size="2">
          <label for="hist1_e">História do Primeiro Evento</label><br>
          {!! Form::textarea('hist1_e', null, array('rows'=>'2', 'cols'=>'33')) !!}
          <br>
          <div class="col-md-3">
            <label for="ano1_e">Ano</label><br>
            {!! Form::text('ano1_e', null, array('id' => 'ano1_e', 'size'=>'10', 'maxlength'=>'4', 'placeholder'=>'Ex.: 2017')) !!}

          </div>
          <div class="col-md-3 col-md-offset-1">
            <label for="diames1_e">Dia e mês</label><br>
            {!! Form::text('diames1_e', null, array('id' => 'diames1_e', 'size'=>'10', 'maxlength'=>'6', 'placeholder'=>'Ex.: DEZ 10')) !!}

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="f2_e">Foto do Segundo Evento</label>
          {!! Form::file('f2_e', null, array('id' => 'f2_e')) !!}

          <label for="t2_e">Título do segundo Evento</label><br>
          {!! Form::text('t2_e', null, array('id' => 't2_e', 'size'=>'33', 'maxlength'=>'30')) !!}
          <br>
          <label for="s2_e">Texto do segundo Evento</label><br>
          {!! Form::textarea('s2_e', null, array('rows'=>'2', 'cols'=>'33', 'onKeyPress'=>'soma2_e(this.value)',  'onKeyUp'=>'soma2_e(this.value)')) !!}
          <br>
          Caracteres digitados:
          <input style="border:none" name="exibe2_e" type="text" class="formulario" value="0" size="2">
          Caracteres restantes:
          <input style="border:none" name="exibe22_e" type="text" class="formulario" size="2">
          <label for="hist2_e">História do Segundo Evento</label><br>
          {!! Form::textarea('hist2_e', null, array('rows'=>'2', 'cols'=>'33')) !!}
          <br>
          <div class="col-md-3">
            <label for="ano2_e">Ano</label><br>
            {!! Form::text('ano2_e', null, array('id' => 'ano2_e', 'size'=>'10', 'maxlength'=>'4', 'placeholder'=>'Ex.: 2017')) !!}

          </div>
          <div class="col-md-3 col-md-offset-1">
            <label for="diames2_e">Dia e mês</label><br>
            {!! Form::text('diames2_e', null, array('id' => 'diames2_e', 'size'=>'10', 'maxlength'=>'6', 'placeholder'=>'Ex.: DEZ 10')) !!}

          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <div class="form-group">
          <label for="f3_e">Foto do Terceiro Evento</label>
          {!! Form::file('f3_e', null, array('id' => 'f3_e')) !!}

          <label for="t3_e">Título do terceiro Evento</label><br>
          {!! Form::text('t3_e', null, array('id' => 't3_e', 'size'=>'33', 'maxlength'=>'30')) !!}
          <br>
          <label for="s3_e">Texto do terceiro Evento</label><br>
          {!! Form::textarea('s3_e', null, array('rows'=>'2', 'cols'=>'33', 'onKeyPress'=>'soma3_e(this.value)',  'onKeyUp'=>'soma3_e(this.value)')) !!}
          <br>
          Caracteres digitados:
          <input style="border:none" name="exibe3_e" type="text" class="formulario" value="0" size="2">
          Caracteres restantes:
          <input style="border:none" name="exibe23_e" type="text" class="formulario" size="2">
          <label for="hist3_e">História do Terceiro Evento</label><br>
          {!! Form::textarea('hist3_e', null, array('rows'=>'2', 'cols'=>'33')) !!}
          <br>
          <div class="col-md-3">
            <label for="ano3_e">Ano</label><br>
            {!! Form::text('ano3_e', null, array('id' => 'ano3_e', 'size'=>'10', 'maxlength'=>'4', 'placeholder'=>'Ex.: 2017')) !!}

          </div>
          <div class="col-md-3 col-md-offset-1">
            <label for="diames3_e">Dia e mês</label><br>
            {!! Form::text('diames3_e', null, array('id' => 'diames3_e', 'size'=>'10', 'maxlength'=>'6', 'placeholder'=>'Ex.: DEZ 10')) !!}

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="f4_e">Foto do Quarto Evento</label>
          {!! Form::file('f4_e', null, array('id' => 'f4_e')) !!}

          <label for="t4_e">Título do quarto Evento</label><br>
          {!! Form::text('t4_e', null, array('id' => 't4_e', 'size'=>'33', 'maxlength'=>'30')) !!}
          <br>
          <label for="s4_e">Texto do quarto Evento</label><br>
          {!! Form::textarea('s4_e', null, array('rows'=>'2', 'cols'=>'33', 'onKeyPress'=>'soma4_e(this.value)',  'onKeyUp'=>'soma4_e(this.value)')) !!}
          <br>
          Caracteres digitados:
          <input style="border:none" name="exibe4_e" type="text" class="formulario" value="0" size="2">
          Caracteres restantes:
          <input style="border:none" name="exibe24_e" type="text" class="formulario" size="2">
          <label for="hist4_e">História do quarto Evento</label><br>
          {!! Form::textarea('hist4_e', null, array('rows'=>'2', 'cols'=>'33')) !!}
          <br>
          <div class="col-md-3">
            <label for="ano4_e">Ano</label><br>
            {!! Form::text('ano4_e', null, array('id' => 'ano4_e', 'size'=>'10', 'maxlength'=>'4', 'placeholder'=>'Ex.: 2017')) !!}

          </div>
          <div class="col-md-3 col-md-offset-1">
            <label for="diames4_e">Dia e mês</label><br>
            {!! Form::text('diames4_e', null, array('id' => 'diames4_e', 'size'=>'10', 'maxlength'=>'6', 'placeholder'=>'Ex.: DEZ 10')) !!}

          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
</div>

<div id="blogs">
  // BLOG
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <div class="form-group">
          <label for="f1_b">Foto do Primeiro Blog</label>
          {!! Form::file('f1_b', null, array('id' => 'f1_b')) !!}

          <label for="t1_b">Título do primeiro Blog</label><br>
          {!! Form::text('t1_b', null, array('id' => 't1_b', 'size'=>'33', 'maxlength'=>'30')) !!}
          <br>
          <label for="s1_b">Texto do primeiro Blog</label><br>
          {!! Form::textarea('s1_b', null, array('rows'=>'2', 'cols'=>'33', 'onKeyPress'=>'soma1_b(this.value)',  'onKeyUp'=>'soma1_b(this.value)')) !!}
          <br>
          Caracteres digitados:
          <input style="border:none" name="exibe1_b" type="text" class="formulario" value="0" size="2">
          Caracteres restantes:
          <input style="border:none" name="exibe21_b" type="text" class="formulario" size="2"><br>
          <label for="hist1_b">História do Primeiro Blog</label><br>
          {!! Form::textarea('hist1_b', null, array('rows'=>'2', 'cols'=>'33')) !!}
          <br>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="f2_b">Foto do Segundo Blog</label>
          {!! Form::file('f2_b', null, array('id' => 'f2_b')) !!}

          <label for="t2_b">Título do segundo Blog</label><br>
          {!! Form::text('t2_b', null, array('id' => 't2_b', 'size'=>'33', 'maxlength'=>'30')) !!}
          <br>
          <label for="s2_b">Texto do segundo Blog</label><br>
          {!! Form::textarea('s2_b', null, array('rows'=>'2', 'cols'=>'33', 'onKeyPress'=>'soma2_b(this.value)',  'onKeyUp'=>'soma2_b(this.value)')) !!}
          <br>
          Caracteres digitados:
          <input style="border:none" name="exibe2_b" type="text" class="formulario" value="0" size="2">
          Caracteres restantes:
          <input style="border:none" name="exibe22_b" type="text" class="formulario" size="2"><br>
          <label for="hist2_b">História do Segundo Blog</label><br>
          {!! Form::textarea('hist2_b', null, array('rows'=>'2', 'cols'=>'33')) !!}
          <br>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <div class="form-group">
          <label for="f3_b">Foto do Terceiro Blog</label>
          {!! Form::file('f3_b', null, array('id' => 'f3_b')) !!}

          <label for="t3_b">Título do terceiro Blog</label><br>
          {!! Form::text('t3_b', null, array('id' => 't3_b', 'size'=>'33', 'maxlength'=>'30')) !!}
          <br>
          <label for="s3_b">Texto do terceiro Blog</label><br>
          {!! Form::textarea('s3_b', null, array('rows'=>'2', 'cols'=>'33', 'onKeyPress'=>'soma3_b(this.value)',  'onKeyUp'=>'soma3_b(this.value)')) !!}
          <br>
          Caracteres digitados:
          <input style="border:none" name="exibe3_b" type="text" class="formulario" value="0" size="2">
          Caracteres restantes:
          <input style="border:none" name="exibe23_b" type="text" class="formulario" size="2"><br>
          <label for="hist3_b">História do Terceiro Blog</label><br>
          {!! Form::textarea('hist3_b', null, array('rows'=>'2', 'cols'=>'33')) !!}
          <br>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="f4_b">Foto do Quarto Blog</label>
          {!! Form::file('f4_b', null, array('id' => 'f4_b')) !!}

          <label for="t4_b">Título do quarto Blog</label><br>
          {!! Form::text('t4_b', null, array('id' => 't4_b', 'size'=>'33', 'maxlength'=>'30')) !!}
          <br>
          <label for="s4_b">Texto do quarto Blog</label><br>
          {!! Form::textarea('s4_b', null, array('rows'=>'2', 'cols'=>'33', 'onKeyPress'=>'soma4_b(this.value)',  'onKeyUp'=>'soma4_b(this.value)')) !!}
          <br>
          Caracteres digitados:
          <input style="border:none" name="exibe4_b" type="text" class="formulario" value="0" size="2">
          Caracteres restantes:
          <input style="border:none" name="exibe24_b" type="text" class="formulario" size="2"><br>
          <label for="hist4_b">História do Quarto Blog</label><br>
          {!! Form::textarea('hist4_b', null, array('rows'=>'2', 'cols'=>'33')) !!}
          <br>
        </div>
      </div>
    </div>
  </div>
  <hr>
</div>


<div id="playlistdown">
  // PLAYLIST PRINCIPAL
  <div class="form-group">
    <label for="url_down">Playlist principal</label><br>
    {!! Form::text('url_down', null, array('id' => 'url_down', 'size'=>'70', 'placeholder'=>'Colar o número da playlist do SoundClound')) !!}

  </div>
  <hr>
</div>

<div id="bt_submit">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <button type="submit" class="btn btn-success">Salvar</button>
</div>
