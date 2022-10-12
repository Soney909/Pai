<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
	<br> <h1> Zadanie 1 </h2> </br>
    <form action="./forms.php" method="POST">
	  <label for="login">Login:</label><br>
	  <input type="text" name="login" value="Login"><br>
	  <label for="Password">Password:</label><br>
	  <input type="password" name="password"><br><br>
	  <p><input type="checkbox" name="checkpassword" value="Zapamiętaj Mnie" />Remember Me</p>
	  <input type="submit" value="Submit">
    </form>
	<br> <h1> Zadanie 2 </h2> </br>
    <form action="./forms.php" method="POST">
        <p>Pseudonim: </p>
        <p><input type="text" name="pseudonim"/></p>
        <p>Komentarz: </p>
        <textarea name='komentarz'>Treść <b>pogrubiona</b> i zwykła.</textarea>
        <p><input type="submit" value="Submit"/></p>
    </form>
	<br> <h1> Zadanie 3 </h2> </br>
        <form action="./forms.php" method="POST">
        <p>Select:</p>
        <select name="os">
            <option value="Linux">Linux</option>
            <option value="Windows">Windows</option>
            <option value="TempleOs">TempleOs</option>
        </select>
        <p>Checkbox:</p>
        <p><input type="checkbox" name="czek[]" value="check1" />1</p>
        <p><input type="checkbox" name="czek[]" value="check2" />2</p>
        <p><input type="checkbox" name="czek[]" value="check3" />3</p>
		<p>Radio</p>
        <p><input type="radio" name="radioSelect" value="1" />1</p>
        <p><input type="radio" name="radioSelect" value="2" />2</p>
        <p><input type="radio" name="radioSelect" value="3" />3</p>
        
        <p><input type="submit" value="Submit" /></p>
        
    </form>
	<br> <h1> Zadanie 4 </h2> </br>
	<form action="./forms.php" method="POST">
	  <label for="name">Name:</label><br>
	  <input type="text" name="name"><br>
	  <label for="nazwisko">Surename:</label><br>
	  <input type="text" name="surename"><br><br>
	  <p><input type="radio" name="rs" value="m" />Men</p>
      <p><input type="radio" name="rs" value="k" />Women</p>
	  <input type="submit" value="Submit">
    </form>
	<br> <h1> Zadanie 5 </h2> </br>
        <form action="./forms.php" method="POST">
        <p>Select:</p>
        <select name="games">
            <option value="Lol">Lol</option>
            <option value="Cs">Cs</option>
            <option value="Dota">Dota</option>
        </select>
        <p><input type="number" name="hr" />Liczba godzin</p>
        
        <p><input type="submit" value="Submit" /></p>
        
    </form>
    
        <?php
            if(isset($_POST['login']) && isset($_POST['password']) ){
                echo $_POST['login'].'<p>';
                echo 'Hasło: '.sha1($_POST['password']);
            }
            
            if(isset($_POST['checkpassword'])){
                echo '<p>'.'Zaznaczono checkbox';
            }
            
            if(isset($_POST['pseudonim']) && isset($_POST['komentarz']) ){
                echo '<p>'.$_POST['pseudonim'];
                echo '<p>'.htmlspecialchars($_POST['komentarz']);
                echo '<p>'.$_POST['komentarz'];
            }
            
            if(isset($_POST['os']) && isset($_POST['radioSelect']) ){
                echo $_POST['os'].'<br>';
                echo 'Radio: '.$_POST['radioSelect'];
            }
            echo '<br>';
            if(isset($_POST['czek'])){
            for($i=0; $i<count($_POST['czek']); $i++){
                echo $_POST['czek'][$i] . "<br />";
            }
            }else{
            //echo "Nie zaznaczono checkboxa";
            }
			if(isset($_POST['name']) && isset($_POST['surename']) && isset($_POST['rs'])){
				$gender = $_POST['rs'];
			} else {
				$gender = "";
			}
			if($gender == "m"){
				echo 'Witam Pana' ." ".htmlspecialchars($_POST['name']);
			}
			else if($gender == "k"){
				echo 'Witam Panią' ." ".htmlspecialchars($_POST['name']);
				
			}
			if(isset($_POST['games']) && isset($_POST['hr'])){
				$num = $_POST['hr'];
				$game = $_POST['games'];
			} else{
				$num = "";
				$game = "";
			}
			if($game == 'Cs' && $num < 500){
				echo "Początkujący";
			} else if($game == 'Dota' && $num < 1000){
				echo "Początkujący";
			} else if($game == 'Lol' && $num < 2500){
				echo "Początkujący";
			} else {
				echo "Zaawansownay";
			}

       ?>
    </body>
</html>