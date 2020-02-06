@extends('layouts.appmaster')
@section('title', 'Login Page')

@section('content')
<!-- Login form -->
	<div align="center">
    	<form action="dologin2" method="post">
    		<input 
    			type="hidden" 
    			name="_token"
    			value="<?php echo csrf_token()?>"
    		/>
    		<h2>
    			Please Login
    		</h2>
    		<table>
    			<tr>
    				<td>Username: </td>
    				<td>
    					<input 
    						type= "text" 
    						name="username"
    						placeholder="Username"
    					/>
    					{{ $errors->first('username') }}
    				</td>
    				<td>Password: </td>
    				<td>
    					<input 
    						type= "text" 
    						name="password"
    						placeholder="Password"
    					/> 
    					{{ $errors->first('password') }}
    				</td>
    			</tr>
    			<tr>
    				<td 
    					colspan = "2"
    					align="center"
    				>
    					<input 
    						type="submit"
    						value="Login"
    					/>
    				</td>
    			</tr>	
    		</table>
    	</form>
    </div>
   	</br>
   	</br>
   	@if($errors->count != 0)
   		<h5>List of errors</h5>
   		@foreach($errors->all() as $message)
   			{{ $message }} </br>
   		@endforeach
   	@endif
   	
@endsection