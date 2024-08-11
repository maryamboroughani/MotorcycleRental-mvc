<?php
namespace App\Models;

abstract class CRUD extends \PDO {
 
    // Constructor to set up the PDO connection
    final public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=motorcycle_shop;port=8889;charset=utf8';
        $username = 'root';
        $password = 'root';
        parent::__construct($dsn, $username, $password);
    }

    // Method to select all rows from the table, with optional sorting
    final public function select($field = null, $order = 'ASC') {
        if ($field === null) {
            $field = $this->primaryKey;
        }
        $sql = "SELECT * FROM $this->table ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Method to select a row by its primary key
    final public function selectId($value) {
        $sql = "SELECT * FROM $this->table WHERE $this->primaryKey = :$this->primaryKey";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$this->primaryKey", $value);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    // Method to insert a new row into the table
    final public function insert($data) {
        $data = array_intersect_key($data, array_flip($this->fillable));
        $fieldNames = implode(', ', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO $this->table ($fieldNames) VALUES ($fieldValues)";
        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        if ($stmt->execute()) {
            return $this->lastInsertId();
        } else {
            return false;
        }
    }

    // Method to update an existing row
    final public function update($data, $id) {
        if ($this->selectId($id)) {
            $data = array_intersect_key($data, array_flip($this->fillable));
            $fieldNames = '';
            foreach ($data as $key => $value) {
                $fieldNames .= "$key = :$key, ";
            }
            $fieldNames = rtrim($fieldNames, ', ');
            $sql = "UPDATE $this->table SET $fieldNames WHERE $this->primaryKey = :$this->primaryKey";
            $stmt = $this->prepare($sql);
            $data[$this->primaryKey] = $id;
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            return $stmt->execute();
        } else {
            return false;
        }
    }

    // Method to delete a row by its primary key
    final public function delete($value) {
        if ($this->selectId($value)) {
            $sql = "DELETE FROM $this->table WHERE $this->primaryKey = :$this->primaryKey";
            $stmt = $this->prepare($sql);
            $stmt->bindValue(":$this->primaryKey", $value);
            return $stmt->execute();
        } else {
            return false;
        }
    }
}
?>
