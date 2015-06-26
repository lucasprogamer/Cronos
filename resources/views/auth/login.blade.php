@extends('layout.principal')

@section('conteudo')
	<div class="panel panel-default">
  		<div class="panel-heading">
    		<h3 class="panel-title">Login</h3>
  		</div>
  		  @if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach

		</ul>
	</div>
	@endif
  		<div class="panel-body">
    		
    		<form action="login/auth" method="post">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
		
				<div class="form-group">
					<label>E-mail</label>
						<input type="text" name="email" value="" class="form-control" placeholder="email@exemplo.com">
				</div>
				<div class="form-group">
					<label>Senha</label>
						<input type="password" name="password" value="" class="form-control" placeholder="Sua Senha">
				</div>
			<div class="checkbox">
       		 <label>
          		<input type="checkbox" name="remenber"> Lembrar me
       	     </label>
      	    </div>
			<button class="btn btn-primary btn-small">Logar</button>     <a href=""><span>Esqueceu sua Senha?</span>
		</form>

  		</div>
	</div>
		
@stop