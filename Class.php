<?
// je récupère mon Pdo
require_once 'Pdo.php';

class  ForTheUser
{
    
    public function __construct(){
        global $pdo;
        $this->pdo = $pdo;
    }

    // public function insert(){
    //     $sql = 'INSERT INTO Service ( Service_Name, Description,) VALUES(?, ?)';
    //     $prp = $this->pdo->prepare($sql);
    //     $prp->execute();

    // }
    public function myArray(){
        $sql = 'SELECT * FROM Utilisateur WHERE *';
        $prp = $this->pdo-prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $prpE = $prp->excute();
        echo $prpE;
    }
}
