<?php
 class Main
    {
	  private $db;
      public function __construct($database)
	  {
        $this->db=$database;		
      }
	  public function random()
	  {
		$temp=time();  
        $sample=base_convert($temp,20,36); 
		$sthandler = $this->db->prepare('SELECT * FROM checktable WHERE code=? LIMIT 1');
		$sthandler->execute(array($sample));
		if ( $sthandler->rowCount() > 0 )
		{
			random();
		}
		else
		{
			return $sample;
		}
	  }
	  public function insert()
	  {
	   $paste=$_POST["paste"];
	   $expdate=$_POST["expdate"];
	   $name=$_POST["name"];
	   $author=$_POST["author"];
	   $password=$_POST["password"];
	   $views=$_POST["views"];
	   //$views=$views+1;
	   $date = date("Y-m-d H:i:s");
	   $code=$this->random();
	   $qry=$this->db->prepare('INSERT INTO checktable (name,paste,author,password,datetime,code,expdate,views) VALUES (?,?,?,?,?,?,?,?)');
	   	try
		{
			$qry->execute(array($name,$paste,$author,$password,$date,$code,$expdate,$views));
			return true;
	    }
		catch(PDOException $e)
		{
			echo "error inserting<br>";
			return false;
		}
	  }
	}  
?>