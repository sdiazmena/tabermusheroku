@extends('layouts.app')

@section('content')
<br>
<br>

<div class="container-fluid text-left">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
        <h3>Busqueda</h3>
        <br>
        <h4>En tu Region</h4>
            <p><a href="#">-Ciudad</a></p>
            <p><a href="#">-Genero</a></p>
            <p><a href="#">-Alfabeticamente</a></p>
            <p><a href="#">-Mejor Puntuada</a></p>
            <Br>
      
            <h4>Nacional</h4>
            <p><a href="#">-Region</a></p>
            <p><a href="#">-Genero</a></p>
            <p><a href="#">-Alfabeticamente</a></p>
            <p><a href="#">-Mejor Puntuada</a></p>
      
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>Aqui damos la bienvenida y una pequeña pincelada de lo que buscamos hacer o que se trata de la pagina</p>
      
      <hr>
      <h4>07/08/2017</h4>
      <div class="col-sm-4">
          <div class="well">
            <h4>Noticia 1</h4>
            <p>Se agrego la siguiente entrada</p> 
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="well">
            <h4>Noticia 3</h4>
            <p>Se agrego la siguiente entrada</p> 
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="well">
            <h4>Noticia 3</h4>
            <p>Se agrego la siguiente entrada</p> 
          </div>
        </div>
      <h5>..</h5>
      <hr>
      <h4>06/08/2017</h4>
      
       <div class="col-sm-4">
          <div class="well">
            <h4>Noticia 4</h4>
            <p>Se agrego la siguiente entrada</p> 
          </div>
        </div>
        
        <div class="col-sm-12">
        <hr>
            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
    
    
    <div class="col-sm-2 sidenav">
      <div class="well">
        <a class="twitter-timeline" href="https://twitter.com/TabermusChile">Tweets by TabermusChile</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div class="well">
        <p>Instagram</p>
      </div>
      <div class="well">
        <div class="fb-page" data-href="https://www.facebook.com/TaberMus-Chile-253823995106930/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/TaberMus-Chile-253823995106930/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TaberMus-Chile-253823995106930/">TaberMus Chile</a></blockquote></div>
      </div>
    
      
    </div>
  </div>
</div>
@endsection
