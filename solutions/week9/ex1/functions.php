<?php

function get_current_time($use_12h_format = false) {
  if ($use_12h_format) {
    return date("h:i:s a");
  }
  return date("H:i:s");
}
