<?php   
				echo " Lirik Lagu : Trevol Daniel - Falling <br>";                                                                                             
$lirik = " <br> My last made me feel like i would never try again <br> 
					But when I saw  saw you, I felt something I never felt <br> 
					Come closer, i'll give you all my love <br>
					If you treat me right, baby I’ll give you everything <br> 
					My last made me feel like I would never try again <br> 
					But when I saw you I felt something I never felt <br> 
					Come closer, give you all my love <br>
					If you treat me right, baby I’ll give you everything <br>

					<br> Talk to me, I need to hear you need me like I need you <br>
					Fall for me, I wanna know you feel how I feel, before you love <br>
					Before you baby I was numb <br>
					Trynna pay by pouring up <br>
					Speedin’ fast on the run <br>
					Never one to get caught up, now you the one that I’m calling <br>
					Swore that I never forget, don’t think I’m just talking <br>
					I think I might go all in, no exceptions girl I need ya <br>

					<br> Like I’m out of my mind, cause I can’t get enough <br>
					Only one that I give my time, cause I got it for ya <br>
					Might make an exception for you, cause I been feeling ya <br>
					Think I might be out of my mind, cause In think you’re the one <br>

					<br> My last made me feel like I would never try again <br>
					But when I saw you I felt something I never felt <br>
					Come closer, give you all my love <br>
					If you treat me right, baby I’ll give you everything <br>
					My last made me feel like I would never try again <br>
					But when I saw you I felt something I never felt <br>
					Come closer, give you all my love <br>
					If you treat me right, baby I’ll give you everything ";

						$lirik = str_replace("a", "o", $lirik) . "<br>";
						$lirik = str_replace("u", "o", $lirik) . "<br>";
						$lirik = str_replace("i", "o", $lirik) . "<br>";
						$lirik = str_replace("e", "o", $lirik) . "<br>";


					echo "$lirik";

?>