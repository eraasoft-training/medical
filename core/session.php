<?php 

session_start();

function setSession(string $key, $value)
{
  $_SESSION[$key] = $value;
}

function getSession(string $key)
{
  return $_SESSION[$key];
}

function endSession()
{
  // Unset all of the session variables.
  $_SESSION = [];

  // If it's desired to kill the session, also delete the session cookie.
  // Note: This will destroy the session, and not just the session data!
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }

  // Finally, destroy the session.
  session_destroy();
}