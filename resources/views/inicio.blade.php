<!DOCTYPE html>
<html lang="en">
<head>
<title>DJ Beto Andrade | Official Website</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" href="/css/bootstrap.css" />
 	<!-- boostrap -->

	<link rel="stylesheet" href="/animate.css">
	<link rel="stylesheet" href="/style.css">
  <link rel="manifest" href="/manifest.json">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

</head>
<body>


{{-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=249078091804020&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> --}}
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Header Starts -->
<div class="navbar-wrapper ">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top animated fadeInDown" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="/images/logo.png" height="80" alt="logo"/></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right" >
                  <li class="active"><a href="#home">Home</a></li>
                 <li><a href="#about">Sobre</a></li>
                 <li><a href="#album">Albuns</a></li>
                 <li><a href="#blogevent">Eventos & Blog</a></li>
                 <li><a href="#playlist">Playlist</a></li>
                 <li><a href="#contact">Contato</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->

<!-- overlay -->
<div class="container overlay">


<!-- home banner starts -->
<div id="home" class="homeinfo">
<div class="row">
	<div class="col-sm-6 col-xs-12">
	<div class="fronttext">
	 	<h2 class="bgcolor  animated fadeInUpBig"><span class="glyphicon glyphicon-headphones"></span> DJ Beto Andrade</h2><br>
		<p class=" animated fadeInUp">Há mais de vinte anos no mercado dos eventos.</p>
	</div>
	</div>

	<div class="col-sm-5 col-xs-12 col-sm-offset-1">
	<div class="player">
	<img src="/images/dj.png" class="graphics hidden-xs  animated fadeInRightBig" alt="dj"/>
  @php
// montando o link da playlist;
    $parte1 = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
    $numero = $editions->url_top;
    $parte2 = "&amp;color=ff0000&amp;theme_color=000000&amp;auto_play=true&amp;hide_related=true&amp;show_artwork=false";
    $link = $parte1.$numero.$parte2;
  @endphp
  		<iframe allowtransparency="true" width="100%" height="170" scrolling="no" frameborder="no" src="{!! $link !!}"></iframe>
    </div>
	</div>

</div>
</div>
<!-- home banner ends -->

@php
  $caminho = '/images/';
@endphp

<!-- blockblack -->
<div class="blockblack">

<!-- About Starts -->
<div id="about" class="spacer">
<h3><span class="glyphicon glyphicon-user"></span> About Me</h3>
<div class="row">
<div class="col-lg-4 col-sm-4  col-xs-12">
<img src="{!! url($caminho.$editions->img_about) !!}" class="img-responsive" alt="img-about"/>
</div>
<div class="col-lg-5 col-sm-8  col-xs-12">
  <p> {!! $editions->msg_about !!} </p>
  <blockquote>{!! $editions->msg_about_donw !!}</blockquote>
</div>

<!--<div class="col-lg-3 visible-lg">
<div class="fb-like-box" data-href="http://www.facebook.com/thebootstrapthemes" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="255"></div>
</div>-->
</div>
</div>
<!-- About Ends -->

<!-- latest release starts-->
<div id="album" class="releases spacer">
<h3><span class="glyphicon glyphicon-music"></span> Album Releases</h3>
<div class="row">
	<div class="col-sm-3 col-xs-12">
    <div class="album">
      <img src="{!! url($caminho.$editions->f1) !!}" class="img-responsive" alt="music theme" />
      <div class="albumdetail">
        <h5>{{ $editions->t1 }}</h5>
        <a href="#" class="listen" data-toggle="modal" data-target="#albumdetail1">
          <span class="glyphicon glyphicon-headphones"></span> Listen Song
        </a>
      </div>
    </div>
  </div>

	<div class="col-sm-3 col-xs-12">
    <div class="album">
      <img src="{!! url($caminho.$editions->f2) !!}" class="img-responsive" alt="music theme" />
      <div class="albumdetail">
        <h5>{{ $editions->t2 }}</h5>
        <a href="#" class="listen" data-toggle="modal" data-target="#albumdetail2">
          <span class="glyphicon glyphicon-headphones"></span> Listen Song
        </a>
      </div>
    </div>
  </div>

	<div class="col-sm-3 col-xs-12">
    <div class="album">
      <img src="{!! url($caminho.$editions->f3) !!}" class="img-responsive" alt="music theme" />
      <div class="albumdetail">
        <h5>{{ $editions->t3 }}</h5>
        <a href="#" class="listen" data-toggle="modal" data-target="#albumdetail3">
          <span class="glyphicon glyphicon-headphones"></span> Listen Song
        </a>
      </div>
      </div>
    </div>

	<div class="col-sm-3 col-xs-12">
    <div class="album">
      <img src="{!! url($caminho.$editions->f4) !!}" class="img-responsive" alt="music theme" />
      <div class="albumdetail">
        <h5>{{ $editions->t4 }}</h5>
        <a href="#" class="listen" data-toggle="modal" data-target="#albumdetail4">
          <span class="glyphicon glyphicon-headphones"></span> Listen Song
        </a>
      </div>
    </div>
  </div>
</div>
<div class="row">
	<div class="col-sm-3 col-xs-12">
    <div class="album">
      <img src="{!! url($caminho.$editions->f5) !!}" class="img-responsive" alt="music theme" />
      <div class="albumdetail">
        <h5>{{ $editions->t5 }}</h5>
        <a href="#" class="listen" data-toggle="modal" data-target="#albumdetail5">
          <span class="glyphicon glyphicon-headphones"></span> Listen Song
        </a>
      </div>
    </div>
  </div>

	<div class="col-sm-3 col-xs-12">
    <div class="album">
      <img src="{!! url($caminho.$editions->f6) !!}" class="img-responsive" alt="music theme" />
      <div class="albumdetail">
        <h5>{{ $editions->t6 }}</h5>
        <a href="#" class="listen" data-toggle="modal" data-target="#albumdetail6">
          <span class="glyphicon glyphicon-headphones"></span> Listen Song
        </a>
      </div>
    </div>
  </div>

	<div class="col-sm-3 col-xs-12">
    <div class="album">
      <img src="{!! url($caminho.$editions->f7) !!}" class="img-responsive" alt="music theme" />
      <div class="albumdetail">
        <h5>{{ $editions->t7 }}</h5>
        <a href="#" class="listen" data-toggle="modal" data-target="#albumdetail7">
          <span class="glyphicon glyphicon-headphones"></span> Listen Song
        </a>
      </div>
    </div>
  </div>

	<div class="col-sm-3 col-xs-12">
    <div class="album">
      <img src="{!! url($caminho.$editions->f8) !!}" class="img-responsive" alt="music theme" />
      <div class="albumdetail">
        <h5>{{ $editions->t8 }}</h5>
        <a href="#" class="listen" data-toggle="modal" data-target="#albumdetail8">
          <span class="glyphicon glyphicon-headphones"></span> Listen Song
        </a>
      </div>
    </div>
  </div>


</div>


</div>
<!-- latest release ends-->

<!--Blog Event Starts-->
<div id="blogevent"  class="blogevent spacer">
<div class="row">

	<!-- events -->
	<div class="col-md-6 col-xs-12">
		<div class="events">
		<h3><span class="glyphicon glyphicon-calendar"></span> Events</h3>
		<ul>
			<li>
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-lg-4"><a href="#" data-toggle="modal" data-target="#eventdetail1"><img src="{!! url($caminho.$editions->f1_e) !!}" class="img-responsive" alt="music theme" /></a></div>
				<div class="col-xs-12  col-sm-6 col-lg-5 "><h5><a href="#" data-toggle="modal" data-target="#eventdetail1">{!! $editions->t1_e !!}</a></h5><p>{!! $editions->s1_e !!}</p></div>
				<div class="col-xs-12  col-sm-3 col-lg-3 date"><b>{!! $editions->ano1_e !!}</b><span>{!! $editions->diames1_e !!}</span></div>
			</div>
			</li>
      <li>
  			<div class="row">
  				<div class="col-xs-12 col-sm-3 col-lg-4"><a href="#" data-toggle="modal" data-target="#eventdetail2"><img src="{!! url($caminho.$editions->f2_e) !!}" class="img-responsive" alt="music theme" /></a></div>
  				<div class="col-xs-12  col-sm-6 col-lg-5 "><h5><a href="#" data-toggle="modal" data-target="#eventdetail2">{!! $editions->t2_e !!}</a></h5><p>{!! $editions->s2_e !!}</p></div>
  				<div class="col-xs-12  col-sm-3 col-lg-3 date"><b>{!! $editions->ano2_e !!}</b><span>{!! $editions->diames2_e !!}</span></div>
  			</div>
  			</li>
  			<li>
  			<div class="row">
  				<div class="col-xs-12 col-sm-3 col-lg-4"><a href="#" data-toggle="modal" data-target="#eventdetail3"><img src="{!! url($caminho.$editions->f3_e) !!}" class="img-responsive" alt="music theme" /></a></div>
  				<div class="col-xs-12  col-sm-6 col-lg-5 "><h5><a href="#" data-toggle="modal" data-target="#eventdetail3">{!! $editions->t3_e !!}</a></h5><p>{!! $editions->s3_e !!}</p></div>
  				<div class="col-xs-12  col-sm-3 col-lg-3 date"><b>{!! $editions->ano3_e !!}</b><span>{!! $editions->diames3_e !!}</span></div>
  			</div>
  			</li>
  			<li>
  			<div class="row">
  				<div class="col-xs-12 col-sm-3 col-lg-4"><a href="#" data-toggle="modal" data-target="#eventdetail4"><img src="{!! url($caminho.$editions->f4_e) !!}" class="img-responsive" alt="music theme" /></a></div>
  				<div class="col-xs-12  col-sm-6 col-lg-5 "><h5><a href="#" data-toggle="modal" data-target="#eventdetail4">{!! $editions->t4_e !!}</a></h5><p>{!! $editions->s4_e !!}</p></div>
  				<div class="col-xs-12  col-sm-3 col-lg-3 date"><b>{!! $editions->ano4_e !!}</b><span>{!! $editions->diames4_e !!}</span></div>
  			</div>
  			</li>
  	</ul>
  		</div>
  	</div>
  	<!-- events -->

  	<!-- blog -->
  	<div class="col-md-5 col-md-offset-1 col-xs-12">
  		<div class="ourblog">
  		<h3><span class="glyphicon glyphicon-book"></span> Blog</h3>
              <ul class="row">
                <li class="row"><a href="#" data-toggle="modal" data-target="#blogdetail1" class="col-xs-12 col-sm-3 col-lg-4"><img src="{!! url($caminho.$editions->f1_b) !!}" class="img-responsive" alt="music theme" /></a>
                <div class="blogtext col-xs-12 col-sm-9  col-lg-8"><h5><a href="#" data-toggle="modal" data-target="#blogdetail">{!! $editions->t1_b !!}</a></h5>
                <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
                <p>{!! $editions->s1_b !!}</p>
                </div>
                </li>
                <li class="row"><a href="#" data-toggle="modal" data-target="#blogdetail2" class="col-xs-12 col-sm-3 col-lg-4"><img src="{!! url($caminho.$editions->f2_b) !!}" class="img-responsive" alt="music theme" /></a>
                <div class="blogtext col-xs-12 col-sm-9  col-lg-8"><h5><a href="#" data-toggle="modal" data-target="#blogdetail">{!! $editions->t2_b !!}</a></h5>
                <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
                <p>{!! $editions->s2_b !!}</p>
                </div>
                </li>
                <li class="row"><a href="#" data-toggle="modal" data-target="#blogdetail3" class="col-xs-12 col-sm-3 col-lg-4"><img src="{!! url($caminho.$editions->f3_b) !!}" class="img-responsive" alt="music theme" /></a>
                <div class="blogtext col-xs-12 col-sm-9  col-lg-8"><h5><a href="#" data-toggle="modal" data-target="#blogdetail">{!! $editions->t3_b !!}</a></h5>
                <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
                <p>{!! $editions->s3_b !!}</p>
                </div>
                </li>
                 <li class="row"><a href="#" data-toggle="modal" data-target="#blogdetail4" class="col-xs-12 col-sm-3 col-lg-4"><img src="{!! url($caminho.$editions->f4_b) !!}" class="img-responsive" alt="music theme" /></a>
                <div class="blogtext col-xs-12 col-sm-9  col-lg-8"><h5><a href="#" data-toggle="modal" data-target="#blogdetail">{!! $editions->t4_b !!}</a></h5>
                <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
                <p>{!! $editions->s4_b !!} </p>
                </div>
                </li>
              </ul>
              </div>

  	</div>
  	<!-- blog -->

  </div>
  </div>
  <!--Blog Events Ends-->

  <!-- playlist Starts -->
  @php
    // montando o link da playlist;
    $parte1_down = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/";
    $numero_down = $editions->url_down;
    $parte2_down = "&amp;theme_color=ff0000&amp;color=ff0000&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false";
    $link_down = $parte1_down.$numero_down.$parte2_down;
  @endphp
  <div id="playlist" class="spacer">
  	<div class="row">
  					<div class="col-md-12 col-xs-12">
  					<h3><span class="glyphicon glyphicon-list"></span> Playlist</h3>
  					<iframe width="100%" height="400" scrolling="no" frameborder="no" src="{!! $link_down !!}"></iframe>
            </div>
  	</div>
  </div>
  <!-- #playlist Ends -->

  <!--Contact Starts-->
  <div id="contact" class="spacer">
  <div class="contactform ">
  <div class="col-sm-6 col-sm-offset-1">
    <h3><span class="glyphicon glyphicon-envelope"></span> Contact</h3>
  </div>
    <div class="row">
        <div class="col-sm-5 col-sm-offset-1 ">
        <h4>Get in touch or<b> Just say Hello!</b></h4>
          <form class="form-group" action="/enviar" method="post">
            <input type="text" placeholder="Name" id="nome" name="nome">
            <input type="email" placeholder="Email" id="email" name="email" required>
            <textarea rows="5" placeholder="Message" id="mensagem" name="mensagem"></textarea>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
            <button type="submit" class="btn btn-warning bgcolor">Send</button>
          </form>
        </div>
        <div class="col-sm-5 ">
          <h4>Map!<b> Location!</b></h4>
          <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d785.7505975984734!2d-54.59311968816546!3d-20.478299277010006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e8b486c7c097%3A0x74ea8b2c6cf398fd!2sTv.+do+Moinho%2C+26+-+Vila+Vilas+Boas%2C+Campo+Grande+-+MS%2C+79051-771!5e0!3m2!1spt-BR!2sbr!4v1500909818123" width="390" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

  <!-- map -->
<div class="row">
  <div class="col-md-12">
<br><br>
<div class="col-xs-3 col-xs-offset-5">
      <a href="https://www.instagram.com/djbetoandrade/" target="_blank"><img style="margin-top: 2px; width: 42px; heigth: 42px" src="/insta.png" /></a>&nbsp
      <a href="https://www.facebook.com/djbeto.andrade/" target="_blank"><img style="width: 40px; heigth: 40px" src="/face.png" /></a>
      <a href="#" data-toggle="modal" data-target="#whats"><img style="width: 56px; heigth: 56px" src="/ww.png"/></a>
</div>
  </div>
</div>

<div class="map clearfix">
  <div class="pull-right">
  <div class="fb-share-button" data-href="https://www.facebook.com/djbeto.andrade" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fdjbeto.andrade&amp;src=sdkpreparse">Compartilhar</a></div>
  <div class="fb-follow" data-href="https://www.facebook.com/djbeto.andrade" data-layout="button" data-size="large" data-show-faces="true"></div>
  </div>

</div>

  {{-- <div class="map clearfix">
  <div class="fb-like-box" data-href="https://www.facebook.com/thebootstrapthemes" data-width="100%" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
  </div> --}}
  <!-- map -->

  </div>
  <!--Contact Ends-->
  </div>



  </div>
  <!-- blockblack -->

  </div>
  <!-- overlay -->



  <!-- Footer Starts -->
  <div id="footer">
  <div class="container">
  Copyright 2017 DJ BETO ANDRADE | Development Denis Vanoni | <a href="{{ route('adm') }}">Administration</a>
  </div>
  </div>
  <!-- # Footer Ends -->


  <!-- background slider -->
  <div id="myCarousel" class="carousel slide hidden-xs">
  <div class="carousel-inner">
      <div class="active item"><img src="/images/back1.jpg" alt="" /></div>
      <div class="item"><img src="/images/back2.jpg" alt="" /></div>
      <div class="item"><img src="/images/back3.jpg" alt="" /></div>
    </div>
  </div>
  <!-- background slider -->

  <!-- Modal -->

  <!--detalhes dos BLOGS-->
    <!--BLOG 1-->
    <div class="modal fade" id="whats" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <div id="blog">
              <h2>Phone</h2>
              <small>Telefones para contato</small>
                    <div class="col-lg-8 col-lg-offset-2">
                      <p>(67) 99233 - 7771</p>
                    </div>
              </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  <div class="modal fade" id="blogdetail1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div id="blog">
            <h2>{!! $editions->t1_b !!}</h2>
            <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
                  <a href="#" class="thumbnail"><img src="{!! url($caminho.$editions->f1_b) !!}" class="img-reponsive" alt="blog" /></a>
                  <div class="col-lg-8 col-lg-offset-2">
                    <p>{!! $editions->hist1_b !!}</p>
                  </div>
            </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!--BLOG 2-->
<div class="modal fade" id="blogdetail2" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div id="blog">
          <h2>{!! $editions->t2_b !!}</h2>
          <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
                <a href="#" class="thumbnail"><img src="{!! url($caminho.$editions->f2_b) !!}" class="img-reponsive" alt="blog" /></a>
                <div class="col-lg-8 col-lg-offset-2">
                  <p>{!! $editions->hist2_b !!}</p>
                </div>
          </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--BLOG 3-->
<div class="modal fade" id="blogdetail3" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div id="blog">
        <h2>{!! $editions->t3_b !!}</h2>
        <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
              <a href="#" class="thumbnail"><img src="{!! url($caminho.$editions->f3_b) !!}" class="img-reponsive" alt="blog" /></a>
              <div class="col-lg-8 col-lg-offset-2">
                <p>{!! $editions->hist3_b !!}</p>
              </div>
        </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--BLOG 4-->
<div class="modal fade" id="blogdetail4" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div id="blog">
        <h2>{!! $editions->t4_b !!}</h2>
        <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
              <a href="#" class="thumbnail"><img src="{!! url($caminho.$editions->f4_b) !!}" class="img-reponsive" alt="blog" /></a>
              <div class="col-lg-8 col-lg-offset-2">
                <p>{!! $editions->hist4_b !!}</p>
              </div>
        </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM DOS BLOGS-->

<!--#######################################################################################-->

  <!--detalhes dos eventos-->
    <!--EVENTO 1-->
  <div class="modal fade" id="eventdetail1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div id="blog">
            <h2>{!! $editions->t1_e !!}</h2>
            <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
                  <a href="#" class="thumbnail"><img src="{!! url($caminho.$editions->f1_e) !!}" class="img-reponsive" alt="blog" /></a>
                  <div class="col-lg-8 col-lg-offset-2">
                    <p>{!! $editions->hist1_e !!}</p>
                  </div>
            </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!--EVENTO 2-->
<div class="modal fade" id="eventdetail2" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div id="blog">
          <h2>{!! $editions->t2_e !!}</h2>
          <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
                <a href="#" class="thumbnail"><img src="{!! url($caminho.$editions->f2_e) !!}" class="img-reponsive" alt="blog" /></a>
                <div class="col-lg-8 col-lg-offset-2">
                  <p>{!! $editions->hist2_e !!}</p>
                </div>
          </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--EVENTO 3-->
<div class="modal fade" id="eventdetail3" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div id="blog">
        <h2>{!! $editions->t3_e !!}</h2>
        <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
              <a href="#" class="thumbnail"><img src="{!! url($caminho.$editions->f3_e) !!}" class="img-reponsive" alt="blog" /></a>
              <div class="col-lg-8 col-lg-offset-2">
                <p>{!! $editions->hist3_e !!}</p>
              </div>
        </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--EVENTO 4-->
<div class="modal fade" id="eventdetail4" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div id="blog">
        <h2>{!! $editions->t4_e !!}</h2>
        <small>Postado em: {{ date('d/m/Y H:i', strtotime($editions->updated_at)) }}</small>
              <a href="#" class="thumbnail"><img src="{!! url($caminho.$editions->f4_e) !!}" class="img-reponsive" alt="blog" /></a>
              <div class="col-lg-8 col-lg-offset-2">
                <p>{!! $editions->hist4_e !!}</p>
              </div>
        </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- FIM DOS EVENTOS-->

  @php
// montando o link das músicas;
    $parte_1 = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/";
    $parte_2 = "&amp;theme_color=000000amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false";
    $numero_1 = $editions->u1;
    $numero_2 = $editions->u2;
    $numero_3 = $editions->u3;
    $numero_4 = $editions->u4;
    $numero_5 = $editions->u5;
    $numero_6 = $editions->u6;
    $numero_7 = $editions->u7;
    $numero_8 = $editions->u8;
    $link_1 = $parte_1.$numero_1.$parte_2;
    $link_2 = $parte_1.$numero_2.$parte_2;
    $link_3 = $parte_1.$numero_3.$parte_2;
    $link_4 = $parte_1.$numero_4.$parte_2;
    $link_5 = $parte_1.$numero_5.$parte_2;
    $link_6 = $parte_1.$numero_6.$parte_2;
    $link_7 = $parte_1.$numero_7.$parte_2;
    $link_8 = $parte_1.$numero_8.$parte_2;
  @endphp

  <!-- Modal -->
  <div class="modal fade" id="albumdetail1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="{{ $link_1 }}"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="{{ $link_2 }}"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail3" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="{{ $link_3 }}"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail4" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="{{ $link_4 }}"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail5" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="{{ $link_5 }}"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail6" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="{{ $link_6 }}"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail7" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="{{ $link_7 }}"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail8" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="{{ $link_8 }}"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

    <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript" ></script>
    <!-- boostrap -->
    <script src="/js/bootstrap.js" type="text/javascript" ></script>
    <script src="/scripts/plugins.js" type="text/javascript"></script>
    <script src="/scripts/script.js" type="text/javascript"></script>

  </body>
  </html>
