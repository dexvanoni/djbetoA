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

</head>
<body>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=249078091804020&version=v2.0";
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
<img src= {!! url($caminho.$editions->img_about) !!} class="img-responsive" alt="img-about"/>
</div>
<div class="col-lg-5 col-sm-8  col-xs-12">
  <p> {!! $editions->msg_about !!} </p>
  <blockquote>{!! $editions->msg_about_donw !!}</blockquote>
</div>
<div class="col-lg-3 visible-lg">
<div class="fb-like-box" data-href="http://www.facebook.com/thebootstrapthemes" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="255"></div>
</div>
</div>
</div>
<!-- About Ends -->

<!-- latest release starts-->
<div id="album" class="releases spacer">
<h3><span class="glyphicon glyphicon-music"></span> Album Releases</h3>
<div class="row">
	<div class="col-sm-3 col-xs-12"><div class="album"><img src="{!! url($caminho.$editions->f1) !!}" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>{{ $editions->t1 }}</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail1"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="{!! url($caminho.$editions->f2) !!}" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>{{ $editions->t2 }}</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail2"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="{!! url($caminho.$editions->f3) !!}" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>{{ $editions->t3 }}</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail3"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="{!! url($caminho.$editions->f4) !!}" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>{{ $editions->t4 }}</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail4"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="{!! url($caminho.$editions->f5) !!}" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>{{ $editions->t5 }}</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail5"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="{!! url($caminho.$editions->f6) !!}" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>{{ $editions->t6 }}</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail6"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="{!! url($caminho.$editions->f7) !!}" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>{{ $editions->t7 }}</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail7"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="{!! url($caminho.$editions->f8) !!}" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>{{ $editions->t8 }}</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail8"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>
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
				<div class="col-xs-12 col-sm-3 col-lg-4"><a href="#" data-toggle="modal" data-target="#blogdetail"><img src="/images/1.jpg" class="img-responsive" alt="music theme" /></a></div>
				<div class="col-xs-12  col-sm-6 col-lg-5 "><h5><a href="#" data-toggle="modal" data-target="#blogdetail">Christmas Eve Party</a></h5><p>Typewriter photo booth vinyl post-ironic, literally keffiyeh locavore tofu lomo pug Odd Future.</p></div>
				<div class="col-xs-12  col-sm-3 col-lg-3 date"><b>2014</b><span>Dec 28</span></div>
			</div>
			</li>
      <li>
  			<div class="row">
  				<div class="col-xs-12 col-sm-3 col-lg-4"><a href="#" data-toggle="modal" data-target="#blogdetail"><img src="/images/2.jpg" class="img-responsive" alt="music theme" /></a></div>
  				<div class="col-xs-12  col-sm-6 col-lg-5 "><h5><a href="#" data-toggle="modal" data-target="#blogdetail">Christmas Eve Party</a></h5><p>Typewriter photo booth vinyl post-ironic, literally keffiyeh locavore tofu lomo pug Odd Future.</p></div>
  				<div class="col-xs-12  col-sm-3 col-lg-3 date"><b>2014</b><span>Dec 28</span></div>
  			</div>
  			</li>
  			<li>
  			<div class="row">
  				<div class="col-xs-12 col-sm-3 col-lg-4"><a href="#" data-toggle="modal" data-target="#blogdetail"><img src="/images/3.jpg" class="img-responsive" alt="music theme" /></a></div>
  				<div class="col-xs-12  col-sm-6 col-lg-5 "><h5><a href="#" data-toggle="modal" data-target="#blogdetail">Christmas Eve Party</a></h5><p>Typewriter photo booth vinyl post-ironic, literally keffiyeh locavore tofu lomo pug Odd Future.</p></div>
  				<div class="col-xs-12  col-sm-3 col-lg-3 date"><b>2014</b><span>Dec 28</span></div>
  			</div>
  			</li>
  			<li>
  			<div class="row">
  				<div class="col-xs-12 col-sm-3 col-lg-4"><a href="#" data-toggle="modal" data-target="#blogdetail"><img src="/images/4.jpg" class="img-responsive" alt="music theme" /></a></div>
  				<div class="col-xs-12  col-sm-6 col-lg-5 "><h5><a href="#" data-toggle="modal" data-target="#blogdetail">Christmas Eve Party</a></h5><p>Typewriter photo booth vinyl post-ironic, literally keffiyeh locavore tofu lomo pug Odd Future.</p></div>
  				<div class="col-xs-12  col-sm-3 col-lg-3 date"><b>2014</b><span>Dec 28</span></div>
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
                <li class="row"><a href="#" data-toggle="modal" data-target="#blogdetail" class="col-xs-12 col-sm-3 col-lg-4"><img src="/images/3.jpg" class="img-responsive" alt="music theme" /></a>
                <div class="blogtext col-xs-12 col-sm-9  col-lg-8"><h5><a href="#" data-toggle="modal" data-target="#blogdetail">New trends in music</a></h5>
                <small>Posted on: Jan 1, 2014</small>
                <p>Typewriter photo booth vinyl post-ironic, literally keffiyeh locavore tofu lomo pug Odd Future. </p>
                </div>
                </li>
                <li class="row"><a href="#" data-toggle="modal" data-target="#blogdetail" class="col-xs-12 col-sm-3 col-lg-4"><img src="/images/4.jpg" class="img-responsive" alt="music theme" /></a>
                <div class="blogtext col-xs-12 col-sm-9  col-lg-8"><h5><a href="#" data-toggle="modal" data-target="#blogdetail">New trends in music</a></h5>
                <small>Posted on: Jan 1, 2014</small>
                <p>Typewriter photo booth vinyl post-ironic, literally keffiyeh locavore tofu lomo pug Odd Future. </p>
                </div>
                </li>
                <li class="row"><a href="#" data-toggle="modal" data-target="#blogdetail" class="col-xs-12 col-sm-3 col-lg-4"><img src="/images/1.jpg" class="img-responsive" alt="music theme" /></a>
                <div class="blogtext col-xs-12 col-sm-9  col-lg-8"><h5><a href="#" data-toggle="modal" data-target="#blogdetail">New trends in music</a></h5>
                <small>Posted on: Jan 1, 2014</small>
                <p>Typewriter photo booth vinyl post-ironic, literally keffiyeh locavore tofu lomo pug Odd Future. </p>
                </div>
                </li>
                 <li class="row"><a href="#" data-toggle="modal" data-target="#blogdetail" class="col-xs-12 col-sm-3 col-lg-4"><img src="/images/2.jpg" class="img-responsive" alt="music theme" /></a>
                <div class="blogtext col-xs-12 col-sm-9  col-lg-8"><h5><a href="#" data-toggle="modal" data-target="#blogdetail">New trends in music</a></h5>
                <small>Posted on: Jan 1, 2014</small>
                <p>Typewriter photo booth vinyl post-ironic, literally keffiyeh locavore tofu lomo pug Odd Future. </p>
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
  <div id="playlist" class="spacer">
  	<div class="row">
  					<div class="col-md-12 col-xs-12">
  					<h3><span class="glyphicon glyphicon-list"></span> Playlist</h3>
  					<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/5937672&amp;theme_color=ff0000&amp;color=ff0000&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false"></iframe>
            </div>
  	</div>
  </div>
  <!-- #playlist Ends -->

  <!--Contact Starts-->
  <div id="contact" class="spacer">
  <div class="contactform center">
  <h3><span class="glyphicon glyphicon-envelope"></span> Contact</h3>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 ">
        <h4>Get in touch or<br><b>Just say Hello!</b></h4>
          <input type="text" placeholder="Name">
          <input type="text" placeholder="Email">
          <textarea rows="5" placeholder="Message"></textarea>
          <button class="btn btn-warning bgcolor">Send</button>
        </div>
    </div>


  <!-- map -->
  <div class="map clearfix">
  <div class="fb-like-box" data-href="https://www.facebook.com/thebootstrapthemes" data-width="100%" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
  </div>
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
  Copyright 2017 DJ BETO ANDRADE - Development Denis Vanoni tel.(67)99122-4547 <a href="{{ route('adm') }}">Administration</a>
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
  <div class="modal fade" id="blogdetail" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>


  <div id="blog">
  <h2>New trends in music</h2>
  <small>Posted on: Jan 20, 2013</small>

        <a href="#" class="thumbnail"><img src="/images/1.jpg" class="img-reponsive" alt="blog" /></a>

        <div class="col-lg-8 col-lg-offset-2">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>


  </div>


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->








  <!-- Modal -->
  <div class="modal fade" id="albumdetail1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/{{ $editions->u1 }}&amp;theme_color=000000&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/{{ $editions->u2 }}&amp;theme_color=000000&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail3" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/{{ $editions->u3 }}&amp;theme_color=000000&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail4" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/{{ $editions->u4 }}&amp;theme_color=000000&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail5" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/{{ $editions->u5 }}&amp;theme_color=000000&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail6" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/{{ $editions->u6 }}&amp;theme_color=000000&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail7" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/{{ $editions->u7 }}&amp;theme_color=000000&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false"></iframe>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" id="albumdetail8" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
  <h2></h2>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/{{ $editions->u8 }}&amp;theme_color=000000&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=false"></iframe>
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
