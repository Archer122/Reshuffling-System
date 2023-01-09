<?PHP 


 
error_reporting(0);
 
class Database
{
	private $con;
	
	public function connect(){
/*define("HOST","192.168.0.1");
define("USER","askibra");
define("PASS","love123");
define("DB","sun");

define("DOMAIN","http://192.168.0.1/START");
	 

*/
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","ers");

define("DOMAIN","http://localhost/START");
	 


       //define("DOMAIN","http://localhost/inv_project/public_html");
		$this->con = new Mysqli(HOST,USER,PASS,DB);
		if ($this->con) {
			return $this->con;
		}
		return "DATABASE_CONNECTION_FAIL";
	}
}

/*  
$host='192.168.0.1';
$user='askibra';
$pass="love123";
$database='sun';*/
$host='localhost';
$user='root';
$pass="";
$database='ers';

//$first='first';

$con = mysqli_connect($host,$user,$pass,$database);


?>