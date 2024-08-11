<?php
namespace App\Providers;

class Validator {
    private $errors = array();
    private $key;
    private $value;
    private $name;

    public function field($key, $value, $name = null){
        $this->key = $key;
        $this->value = $value;
        $this->name = $name ? ucfirst($name) : ucfirst($key);
        return $this;
    }

    public function required(){
        if (empty($this->value)){
            $this->errors[$this->key] = "$this->name is required";
        }
        return $this;
    }

    public function max($length){
        if(strlen($this->value) > $length){
            $this->errors[$this->key] = "$this->name must be less than $length characters";
        }
        return $this;
    }

    public function min($length){
        if(strlen($this->value) < $length){
            $this->errors[$this->key] = "$this->name must be more than $length characters";
        }
        return $this;
    }

    public function email(){
        if(!empty($this->value) && !filter_var($this->value, FILTER_VALIDATE_EMAIL)){
            $this->errors[$this->key] = "Invalid $this->name format";
        }
        return $this;
    }

    public function numeric(){
        if(!is_numeric($this->value)){
            $this->errors[$this->key] = "$this->name must be a number";
        }
        return $this;
    }

    public function regex($pattern, $customMessage = null){
        if (!preg_match($pattern, $this->value)) {
            $this->errors[$this->key] = $customMessage ?? "$this->name format is invalid";
        }
        return $this;
    }

    public function minAge($dateOfBirth, $age){
        $dob = new \DateTime($dateOfBirth);
        $today = new \DateTime();
        $interval = $today->diff($dob);
        if($interval->y < $age){
            $this->errors[$this->key] = "$this->name must be at least $age years old";
        }
        return $this;
    }

    public function isSuccess(){
        return empty($this->errors);
    }

    public function getErrors(){
        return $this->errors;
    }
}
?>
