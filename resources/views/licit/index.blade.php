<h1> Licitaciones </h1>

@foreach ($licit as $licitaciones)
<article>
 <h2> {{ $licit ->name }} </h2>
<div class= "body">{{ $licit->body}} </div>
</article>
@endforeach

