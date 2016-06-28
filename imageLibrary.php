<?php
require('movies_encode_json.php');
include 'movies_encode_json';

header("Location: http://localhost:8888/movies_encode_json.php"); /* Redirect browser */
exit();

namespace imageLibrary{
	
	class Pictures{

	public function getPictures(){

	  echo ArtworkJson::getArtwork();
	}
	}

	class ArtworkJson{

		public static function getArtwork(){

			if ($_SESSION['timeout'] + 10 * 60 < time()) {
     // session timed out

				session_start();

				echo "the session has timed out";
  } else {
     // session ok

  	echo "you have some time left before your session is done";
  	session_destroy();
  }

			$this->$firstMove = firstMove;
			$this->$secondMove = secondMove;

			echo "Artwork was received";
			echo firstMove[0];
			echo secondMove[1];

		}
	}
$pict_json = new Pictures();
$pict_json->getPictures();

}

?>