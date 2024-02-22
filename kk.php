<?php
  $authorizedUserAgents = ["kntol"];
  $userAgent = $_SERVER["HTTP_USER_AGENT"];

  if (in_array($userAgent, $authorizedUserAgents)) {
    echo file_get_contents("client.html");
  } else {
    header("HTTP/1.0 403 Forbidden");
    echo "You are not authorized to view this content.";
  }
?>