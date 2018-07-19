<?php
	if(isset($_POST['dodajkomentarz'])){
		header('Location: news.php?id='.$_POST['newsid'].'#news','refresh');
	}
?>

<!DOCTYPE html>
<html>
	<?php $title = "NEWS - X Lorem Ipsum Conference"; include 'templates/up.php'; ?>
	
		<div class="container-fluid" id="news">
			<?php 
			//lista aktualnosci
			require_once 'controllers/engine.php';		
			$aktualnosci = new aktualnosci();
			$lista = $aktualnosci->listing('aktualnosci');
			
			if(!isset($_GET['id'])){
				echo "<h2>NEWS</h2><br>";
					
				foreach($lista as $i){
					?>
					<div class="col-sm-10 col-sm-offset-1 newsy panel panel-default">
					  <div class="panel-heading"><h3><a href="news.php?id=<?php echo $i['id'];?>#news"><?php echo $i['tytul'];?></a></h3></div>
					  <div class="panel-body">
						<p class="info"><?php echo date("d.m.Y", strtotime($i['data'])).", ".$i['autor'];?></p>
						<p><?php echo substr($i['tresc'], 0, 300);?>...</p><a href="news.php?id=<?php echo $i['id'];?>#news" role="button" class="btn btn-default">more</a>
					  </div>
					</div>
					<?php
				};
			
			}
			else{
				echo '<h2><a href="news.php#news">NEWS</a></h2><br>';
				foreach($lista as $i){
					if($i['id'] == $_GET['id']){
						?>
						<div class="col-sm-10 col-sm-offset-1 panel panel-default" id="newsdiv">
						  <div class="panel-heading"><h3><?php echo $i['tytul'];?></h3></div>
						   <div class="panel-body">  
							<p class="info"><?php echo date("d.m.Y", strtotime($i['data'])).", ".$i['autor'];?></p>
						    <p><?php echo $i['tresc'];?></p>
						   </div>
						 </div>
							<h3>Comments</h3>
							<h4><a href="news.php?id=<?php echo $i['id'];?>#addcomment" role="button" class="btn btn-default">Add a comment</a></h4><br>
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

							  <div class="col-sm-8 col-sm-offset-2" id="addcomment">
								  <br><br><br><h4>Add a comment</h4>
								  <form action="news.php?id=<?php echo $i['id'];?>#news" method="post">	 
									  <input type="hidden" name="newsid" value="<?php echo $i['id']?>" />
									  <input type="text" class="form-control" name="author" placeholder="Author (required)" required><br>
									  <input type="email" class="form-control" name="email" placeholder="Email address (required, will not be published)" required><br>
									  <input type="text" class="form-control" name="webpage" placeholder="Webpage"><br>
									  <textarea class="form-control" rows="7" name="comment" required></textarea><br>
									  <button type="submit" class="btn btn-default" name="dodajkomentarz">Add</button>
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
		
		
	
	<?php include 'templates/bottom.php';?>
</html>