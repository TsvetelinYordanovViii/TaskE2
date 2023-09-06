<?php

class Database {
    private $conn;

    public function connect ($servername, $database, $username, $password){
        try{
            $this->conn = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
    
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //echo "Connection successful.";
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function createRecord($fields, $values, $table){
        $searchedTable = filter_var($table, FILTER_SANITIZE_STRING);
        $tableFields = $fields;
        $tableValues = $values;
        
        for ($i=0; $i < sizeof($tableFields); $i++) { 
            $tableFields[$i] = filter_var($tableFields[$i] , FILTER_SANITIZE_STRING);
            $tableValues[$i] = filter_var($tableValues[$i] , FILTER_SANITIZE_STRING);
        }


        $insertFields = "";
        $insertParameters = "";
        for ($i=0; $i < sizeof($tableFields)-1; $i++) {
            $table = $tableFields[$i];
            $insertFields = "$insertFields $table,";
            $insertParameters = "$insertParameters :$table,";
        }
        $lastParameter = $tableFields[sizeof($tableFields)-1];
        $insertFields = "$insertFields $lastParameter";
        $insertParameters = "$insertParameters :$lastParameter";

        $createQuery = "INSERT INTO $searchedTable
                ($insertFields) VALUES ($insertParameters)";

        $createStm = $this->conn->prepare($createQuery);
        for ($i=0; $i < sizeof($tableFields); $i++) { 
            $parameter = ":$tableFields[$i]";
            $parameterValue = $tableValues[$i];
            $createStm->bindParam($parameter, $parameterValue);
        }
        $createStm->execute();
    }

    public function readRecord($id, $table){
        $searchedTable = filter_var($table, FILTER_SANITIZE_STRING);

        //If a where clause is defined, create a query with a where clause
        //else create a simple select query.
        if (strlen($id) > 0){
            $searchedId = filter_var($id, FILTER_SANITIZE_STRING);

            $selectQuery = "
            SELECT * FROM $searchedTable
            WHERE id = :searchedId
            ";
            $selectStm = $this->conn->prepare($selectQuery);
            $selectStm->bindParam(':searchedId', $searchedId);
        }
        else{
            $selectQuery = "
            SELECT * FROM $searchedTable
            ";
            $selectStm = $this->conn->prepare($selectQuery);
        }

        $selectStm->execute();
        return $selectStm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateRecord($id, $fields, $values, $table){
        $searchedTable = filter_var($table, FILTER_SANITIZE_STRING);
        $tableFields = $fields;
        $tableValues = $values;
        
        for ($i=0; $i < sizeof($tableFields); $i++) { 
            $tableFields[$i] = filter_var($tableFields[$i] , FILTER_SANITIZE_STRING);
            $tableValues[$i] = filter_var($tableValues[$i] , FILTER_SANITIZE_STRING);
        }

        $updateParameters = "";
        for ($i=1; $i < sizeof($tableFields)-1; $i++) {
            $parameter = $tableFields[$i];
            $updateParameters =  "$updateParameters $parameter = :$parameter,";
        }
        $lastParameter = $tableFields[$i];
        $updateParameters = "$updateParameters $lastParameter = :$lastParameter";

        
        $updateQuery = "
            UPDATE $searchedTable
            SET $updateParameters
            WHERE id = :id
        ";
        $updateStm = $this->conn->prepare($updateQuery);
        for ($i=0; $i < sizeof($tableFields); $i++) { 
            $parameter = $tableFields[$i];
            $updateStm->bindParam((": + $parameter"), $tableValues[$i]);
        }

        $selectStm->execute();
    }

    public function deleteRecord($id, $table){
        $sourceTable = filter_var($table, FILTER_SANITIZE_STRING);
        $deletedId = filter_var($id, FILTER_SANITIZE_STRING);

        $deleteQuery = "
            DELETE FROM $sourceTable
            WHERE id = :id
        ";

        $deleteStm = $this->conn->prepare($deleteQuery);
        $deleteStm->bindParam(':id', $deletedId);
        $deleteStm->execute();
    }
}

?>