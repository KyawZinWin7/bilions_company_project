<?php

namespace App\Controllers;

class Validation {
  // Properties
  public $name, $email, $subject, $body;
  public function __construct($name, $email, $subject, $body)
  {
    $this->name = $name;
    $this->email = $email;
    $this->subject = $subject;
    $this->body = $body;
  }

  function validate() {
  
// start name validation
    if (empty($this->name)) {
  exit(json_encode(array("status" => "Fail", "name" => "name", "response" => "Please Fill Your Name!")));
} else {
  $name = $this->name;
  if (strlen($name) > 30) {
    exit(json_encode(array("status" => "Fail", "name" => "name", "response" => "Your Name is Too many!")));
  } else {
    $name = trim($name);
    $name = htmlspecialchars($name);
  }
}
// end name validation

// start email validation
if (empty($this->email)) {
  exit(json_encode(array("status" => "Fail", "name" => "email", "response" => "Please Fill Email Address!")));
} else {
  $email = $this->email;
  if (strlen($email) > 40) {
    exit(json_encode(array("status" => "Fail", "name" => "email", "response" => "Your Email is Too many!")));
  } else {
    $email = trim($email);
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) {
      exit(json_encode(array("status" => "Fail", "name" => "email", "response" => "Please Enter Your Real Email!")));
    }
  }
} // end email validation
// start subject validation
if (empty($this->subject)) {
  exit(json_encode(array("status" => "Fail", "name" => "subject", "response" => "Please Fill Subject!")));
} else {
  $subject = $this->subject;
  if (strlen($subject) > 40) {
    exit(json_encode(array("status" => "Fail", "name" => "subject", "response" => "Your Subject is Too many!")));
  } else {
    $subject = trim($subject);
    $subject = htmlspecialchars($subject);
  }
}
// end subject validation
// start body validation
if (empty($this->body)) {
  exit(json_encode(array("status" => "Fail", "name" => "body", "response" => "Please Fill Message.")));
} else {
  $body = $this->body;
  if (strlen($body) > 300) {
    exit(json_encode(array("status" => "Fail", "name" => "body", "response" => "Your Message is Too many!")));
  } else {
    $body = trim($body);
    $body = htmlspecialchars($body);
  }
}
// end body validation

$data = ['name'=>$name, 'email'=>$email, 'subject'=>$subject, 'body'=>$body];
return $data;

  }
}
?>
