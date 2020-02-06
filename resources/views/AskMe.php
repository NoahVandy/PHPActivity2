<html>
	<div align="center">
    	<form action="dologin" method="post">
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
    				</td>
    				<td>Password: </td>
    				<td>
    					<input 
    						type= "text" 
    						name="lastname"
    						placeholder="Password"
    					/> 
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

</html>