<?php

 require 'cabecalho.php' 

 ?>
<h3>Pesquisar reserva</h3>
<hr>
 <br>
			<div class="container-fluid">
				<form method="POST" class="form-inline row">
          Data .
    				<input class="form-control " name="filtro" required placeholder="Data inicial"  type="date">
            Data .
    				<input class="form-control " name="filtro2" required type="date">
            Horário inicial:
            <input class="form-control " name="hora1" required  type="time">
            Horário final:
            <input class="form-control " name="hora2" required type="time">
   				 	<button href="pesquisar.php"class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
  				</form>
  			</div>	
	</div>