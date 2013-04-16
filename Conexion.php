<?php
class Conexion {

	public $link;

	public function __construct($base,$host,$user,$pass)
	{

		$this->link=new mysqli($host,$user,$pass)or die('no'.mysql_error());
		$this->link->query("use $base");


	}

	public function Resultado_pornombre($consulta){

	$query=$this->link->query($consulta);
	$des= mysqli_fetch_array($query);

	return $des;
	}


	public function Resultado_renglon($consulta)
	{

		$query=$this->link->query($consulta)or die('no'.mysqli_error());


		return $query;
	}



	public function Query($consulta)
	{

		
			$query=$this->link->query($consulta)or die('no'.mysqli_error());

		return true;
	}

	public function Nombre($consulta)
	{

	$query=$this->link->query($consulta);
	$des= mysqli_fetch_array($query);

	return $des;
	}


	public function Cerrar()

	{

		$this->link->mysqli_close();
		return true;

	}


}







?>
