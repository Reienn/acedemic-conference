<?php

    class aktualnosci{

        var $conn;
		
        function aktualnosci(){ //konstruktor - połączenie z bazą
            $this->conn = mysqli_connect('localhost','root','','xkkk');
			if (!$this->conn) {die("Błąd połączenia z bazą danych.");}
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
           mysqli_query($this->conn, 'insert into komentarze (autor, mail, url, tresc, news) values(\''.$autor.'\',\''.$mail.'\',\''.$url.'\',\''.$tresc.'\',\''.$news.'\');') or die("Błąd. Nie dodano komentarza.");
		}

	}
	
?>