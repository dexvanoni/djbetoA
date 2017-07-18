// ABOUT ME

<div class="form-group">
  <label for="img_about">Imagem de "About Me"</label>
  <input type="file" name="img_about" id="img_about">
</div>

<div class="form-group">
  <label for="img_about">Texto de "About Me"</label><br>
  <textarea name="msg_about" id="msg_about" rows="4" cols="50"></textarea>
</div>

<div class="form-group">
  <label for="img_about">Texto em foco "About Me"</label><br>
  <textarea name="msg_about_donw" id="msg_about_donw" rows="4" cols="50"></textarea>
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
