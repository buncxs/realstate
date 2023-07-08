<?php

function tap($value, $callback = null)
{
  if (is_null($callback)) {
    return;
  }

  $callback($value);

  return $value;
}
