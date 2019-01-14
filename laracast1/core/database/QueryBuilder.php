<?php 
class QueryBuilder{

    protected $dbh;

    public function __construct($dbh){
        $this->dbh = $dbh;
    }

    function selectAll($table){
    $sql = "select * from {$table}";
    $stmt = $this->dbh->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS);
}
    function addTask($description)
    {
        $sql = "INSERT INTO todos (description, completed) values (:description, false)";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
        header("Location: /");
    }
    public function insert($table, $parameters){
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':'.implode(', :', array_keys($parameters))
        );
        try {
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute($parameters);
        } catch (Exception $e) {
            die('Something wrong');
        }
    }
}