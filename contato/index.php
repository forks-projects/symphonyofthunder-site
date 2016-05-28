<?php require_once("../header.php");?>

	  <!-- content-wrap starts here -->
	  <div id="content-wrap">
	  
	  		<div id="main"> 
		<h1 class="decay">Contato</h1>
			<p>
			<strong> Symphony of Thunder </strong><br />
			Rua José Coutinho Barbosa, 439<br />
			Inhuguvira <br />
			Cajati - São Paulo<br />
			11950-000 - SP - BRASIL</p>

			<p><strong>Fones:</strong><br />
			 (13) 3854.3201 - Julio<br />
			 (13) 8114.9603 - Renan<br />
			</p>			


			<p><strong> Mail : </strong><br />
			Entre em contato através do formulário abaixo : </p>

		 <form method="post" action="mailer.php" name="form" onSubmit="return enviardados();">
	
		<div>
			<span class="formlabel">Nome :</span><br />
			<input class="forminput" type="text" name="nome" id="nome" maxlength="40" /><br />

			<span class="formlabel">Email :</span><br />
			<input class="forminput" type="text" maxlength="40" name="email" id="email" /><br />

			<span class="formlabel">Assunto :</span><br />
			<input class="forminput" type="text" maxlength="60" name="assunto" id="assunto" /><br />

			<span class="formlabel">Mensagem :</span><br />
			<textarea name="mensagem" id="mensagem" rows="10" cols="20" class="textarea"></textarea><br />

			<input class="submit" type="submit" name="Submit" value="Enviar" />
			<input class="submit" type="reset" name="Reset" value="Limpar">
		</div>
		</form>
		

			<h1 class="decay">Administração do Site :</h1>
			<p><strong>Sarkioja WebDesign </strong><br />
			www.sarkioja.tk <br />
			info@sarkioja.tk </p>

			<br /><br /><br /><br /><br /><br /><br />
			<br /><br /><br /><br /><br /><br /><br />
			<br /><br /><br /><br /><br /><br />
				
			</div> 
			

<?php require_once("../sidebar.php");?>
		
<?php require_once("../footer.php");?>