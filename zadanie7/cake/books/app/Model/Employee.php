<?php
 class Employee extends AppModel {
 var $name = 'Employee';
 var $validate = array('nazwisko' => array('rule' => 'notBlank'), 'etat' => array('rule' => 'notBlank'), "placa_pod" => array('rule' => 'numeric'));
 }
?>