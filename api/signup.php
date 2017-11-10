<?php

define("ERR_MAIL_CAUGHT", 101);
define("ERR_MAIL_MISSING", 102);
define("ERR_MAIL_INVALID", 103);
define("ERR_MAIL_FAILED", 104);

$email = $_POST["email"];
$emailRegExp = "/^(([^<>()\[\]\\.,;:\s@\"]+(\.[^<>()\[\]\\.,;:\\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
$validEmail = preg_match($emailRegExp, $email);
$to = "bill@trippki.com";
$subject = "New Trippki Landing Page Sign-up";
$message = "<html>" .
              "<head>" .
                "<title>" . $subject . "</title>" .
              "</head>" .
              "<body>" .
                "<p>" .
                  "You have a new lead from the Trippki landing page" .
                "</p>" .
                "<p>" .
                  "<strong>Email:</strong> " . $email .
                "</p>" .
              "</body>" .
           "</html>";
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-Type: text/html; charset=iso=8859-1";
$headers[] = "From: Trippki Landing Page <noreply@trippki.com>";
$headers[] = "Reply-To: admin@trippki.com";
$headers[] = "CC: steve@trippki.com";
$headers = implode("\r\n", $headers);
$json = [];

try {
  if ($email && trim($email) !== "") {
    if ($validEmail) {
      $hasMailed = mail($to, $subject, $message, $headers);

      if ($hasMailed) {
        $data["message"] = "Email sent";
      } else {
        $error = [
          "code" =>  ERR_MAIL_FAILED,
          "message" => "Failed to send mail"
        ];
      }
    } else {
        $error = [
          "code" =>  ERR_MAIL_INVALID,
          "message" => "Invalid email"
        ];    
    }
  } else {
        $error = [
          "code" =>  ERR_MAIL_MISSING,
          "message" => "Email parameter is missing"
        ];        
  }
} catch (Exception $err) {
  $error = [
    "code" =>  ERR_MAIL_CAUGHT,
    "message" => $err->getMessage()
  ];
} finally {
  if ($data) {
    http_response_code(200);
    $json["data"] = $data;
  }

  if ($error) {
    http_response_code(500);
    $json["error"] = $error;
  }

  $json["meta"] = [
    "email" => $email,
    "emailRegExp" => $emailRegExp
  ];

  header("Content-Type: application/json");
  $res = json_encode($json);

  exit($res);
}

?>