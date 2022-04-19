<?php

/**
 * Este arquivo contém funções uteis que podem ser acessados por todo o plugin
 */

if (!defined('ABSPATH')) exit;

function isChecked($name, $value)
{
  $checked = isset($_POST[$name]) && in_array($value, $_POST[$name]);

  return $checked ? 'checked' : '';
}

function isSelected($name, $value)
{
  $selected = isset($_POST[$name]) && $_POST[$name] == $value;

  return $selected ? 'selected' : '';
}

function formatLable($lable)
{
  $name = explode(':', $lable);

  return $name[1];
}
