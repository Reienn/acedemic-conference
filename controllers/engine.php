<?php

    class aktualnosci{

        var $conn;
		
        function aktualnosci(){ //connecting with database
            $this->conn = mysqli_connect('localhost','db_user','db_password','db_name');
			if (!$this->conn) {die("Error. Could not connect with database.");}
			return $this->conn;
        }

        function listing($table){
            $lista = array();
			$result = mysqli_query($this->conn, 'select*from '.$table.' order by data desc');
            while($a = mysqli_fetch_assoc($result)){
                $lista[] = $a;
            }
            return $lista;
        }

		function skomentuj($autor,$mail,$url,$tresc,$news){
           mysqli_query($this->conn, 'insert into komentarze (autor, mail, url, tresc, news) values(\''.$autor.'\',\''.$mail.'\',\''.$url.'\',\''.$tresc.'\',\''.$news.'\');') or die("Error. Could not add a comment.");
		}

	}
	
?>