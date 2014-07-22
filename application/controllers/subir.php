<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subir extends CI_Controller {

	 
	public function index()
    {
	$this->load->view('subir_view');
    }

    function upload()
    {
    	echo 'sdfsdf';

		if (!empty($_FILES))
		{
	/*
		    $tempFile = $_FILES['file']['tmp_name'];
	
		    //$targetPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
		    $targetPath = base_url() . 'public/upload';
	
		    $targetFile = $targetPath . $_FILES['file']['name'];
	
		    move_uploaded_file($tempFile, $targetFile);
	*/
			/*
	 				$tempFile = $_FILES['file']['tmp_name'];
	                $fileName = $_FILES['file']['name'];
	                $targetPath = '/Applications/XAMPP/xamppfiles/htdocs/desarrollo/arrastrar/public/upload/';
	                $targetFile = $targetPath . $fileName ;
	                move_uploaded_file($tempFile, $targetFile) or die("no se pudo mover el archivo");
	                echo 'test 1';
			*/
	
		}
    }
    
    public function guardar()
    {
    	$move = "/Applications/XAMPP/xamppfiles/htdocs/desarrollo/arrastrar/public/upload/";
    	echo $_FILES["file"]['name']."<br>";
    	echo $_FILES["file"]['tmp_name']."<br>";
    	echo $_FILES["file"]['size']."<br>";
    	echo $_FILES['file']['error']."<br>";
    	move_uploaded_file($_FILES['file']['tmp_name'], $move.$_FILES["file"]['name']);
    }

}
 