<?php
	if(isset($_POST['dodajkomentarz'])){
		header('Location: aktualnosci.php?id='.$_POST['newsid'].'#aktualnosci','refresh');
	}
?>

<!DOCTYPE html>
<html>
	<?php $title = "Aktualności - X Krakowska Konferencja Kognitywistyczna"; include 'up.php'; ?>
	
		<div class="container-fluid" id="aktualnosci">
			<?php 
			//lista aktualnosci
			require_once 'engine.php';		
			$aktualnosci = new aktualnosci();
			$lista = $aktualnosci->listing('aktualnosci');
			
			if(!isset($_GET['id'])){
				echo "<h2>AKTUALNOŚCI</h2><br>";
					
				foreach($lista as $i){
					?>
					<div class="col-sm-10 col-sm-offset-1 newsy panel panel-default">
					  <div class="panel-heading"><h3><a href="aktualnosci.php?id=<?php echo $i['id'];?>#aktualnosci"><?php echo $i['tytul'];?></a></h3></div>
					  <div class="panel-body">
						<p class="info"><?php echo date("d.m.Y", strtotime($i['data'])).", ".$i['autor'];?></p>
						<p><?php echo substr($i['tresc'], 0, 300);?>...</p><a href="aktualnosci.php?id=<?php echo $i['id'];?>#aktualnosci" role="button" class="btn btn-default">więcej</a>
					  </div>
					</div>
					<?php
				};
			
			}
			else{
				echo '<h2><a href="aktualnosci.php#aktualnosci">AKTUALNOŚCI</a></h2><br>';
				foreach($lista as $i){
					if($i['id'] == $_GET['id']){
						?>
						<div class="col-sm-10 col-sm-offset-1 panel panel-default" id="news">
						  <div class="panel-heading"><h3><?php echo $i['tytul'];?></h3></div>
						   <div class="panel-body">  
							<p class="info"><?php echo date("d.m.Y", strtotime($i['data'])).", ".$i['autor'];?></p>
						    <p><?php echo $i['tresc'];?></p>
						   </div>
						 </div>
							<h3>Komentarze</h3>
							<h4><a href="aktualnosci.php?id=<?php echo $i['id'];?>#dodajkomentarz" role="button" class="btn btn-default">Dodaj komentarz</a></h4><br>
							<?php 
							$komentarze = new aktualnosci();
							$lista_komentarzy = $komentarze->listing('komentarze');

							foreach($lista_komentarzy as $j){
								if($j['news']==$i['id']){
								?>
								<div class="col-sm-8 col-sm-offset-2 newsy panel panel-default">
								  <div class="panel-body">
									<p><b><?php echo $j['autor']."</b><br>".date("d.m.Y, H:i", strtotime($j['data']));?></p>
									<p><?php echo $j['tresc'];?></p>
								  </div>
								</div>
								<?php
								}
							};							
							?>

							  <div class="col-sm-8 col-sm-offset-2" id="dodajkomentarz">
								  <br><br><br><h4>Dodaj komentarz</h4>
								  <form action="aktualnosci.php?id=<?php echo $i['id'];?>#aktualnosci" method="post">	 
									  <input type="hidden" name="newsid" value="<?php echo $i['id']?>" />
									  <input type="text" class="form-control" name="author" placeholder="Autor (wymagane)" required><br>
									  <input type="email" class="form-control" name="email" placeholder="Adres email (wymagane, adres nie będzie publikowany)" required><br>
									  <input type="text" class="form-control" name="webpage" placeholder="Strona internetowa"><br>
									  <textarea class="form-control" rows="7" name="comment" required></textarea><br>
									  <button type="submit" class="btn btn-default" name="dodajkomentarz">Dodaj</button>
								  </form>
							  </div>						  
						
						<?php
						 if(isset($_POST['author']) and isset($_POST['email']) and isset($_POST['comment'])){
							$skomentuj = new aktualnosci();
							if(!isset($_POST['webpage'])){ $url = 'null';} else{$url = $_POST['webpage'];}						
							$skomentuj->skomentuj($_POST['author'],$_POST['email'],$url,$_POST['comment'],$_POST['newsid']);
							$dodanokomentarz = true;
						}
					}
				}
			}			
			
			?>
		</div>
		
		
	
	<?php include 'bottom.php';?>
</html>