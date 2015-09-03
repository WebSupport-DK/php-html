<?php

// load class
require_once '../Form.php';

// use class
use thom855j\PHPHtml\Form;

// start a new form with action, method,
//  if it should parse files (set true) and exktra classes, attributes etc.
Form::start($action, $method, $file_upload = null, $options = null);

// add form label to form
Form::label($for = 'id', $text = '', $options = null);
        
// add input to form
Form::input($type = 'text', $name = 'username', $value = null, $options = null);

// add textarea to form
Form::textarea($name = '', $options = null, $content = null);

// end the form
Form::end();


