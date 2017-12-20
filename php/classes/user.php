<?php
include_once("../dbconn.php");
include_once("../console.php");

class NAW implements JsonSerializable{
  var $userid;
  var $name;
  var $role;
  var $birthday;
  var $lastblog;
  var $firstblog;
  var $accountdate;
  var $description;
  var $active;
  var $password;


  // public function connect()   {   }
  // public function disconnect()    {   }

  public function select()        {   }

  public function insert($post) {
    global $conn;

    $userid = (isset($post["userid"])) ? $post["userid"] : "";
    $name = (isset($post["name"])) ? $post["name"] : "";
    $role = (isset($post["role"])) ? $post["role"] : "";
    $birthday = (isset($post["birthday"])) ? $post["birthday"] : "";
    $lastblog = (isset($post["lastblog"])) ? $post["lastblog"] : "";
    $firstblog = (isset($post["firstblog"])) ? $post["firstblog"] : "";
    $accountdate = (isset($post["accountdate"])) ? $post["accountdate"] : "";
    $description = (isset($post["description"])) ? $post["description"] : "";
    $active = (isset($post["active"])) ? $post["active"] : "";
    $password = (isset($post["password"])) ? $post["password"] : "";

    $password = password_hash($password, PASSWORD_DEFAULT);

     }

  public function delete()        {   }

  public function update()    {   }

  function jsonSerialize(){
    return [
      "userid" => $this->$userid,
      "name" => $this->$name,
      "role" => $this->$role,
      "birthday" => $this->$birthday,
      "lastblog" => $this->$lastblog,
      "firstblog" => $this->$firstblog,
      "accountdate" => $this->$accountdate,
      "description" => $this->$description,
      "active" => $this->$active,
      "password" => $this->$password
    ];
}

}

?>
