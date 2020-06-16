<h1>Dodaj pracownika</h1>
<?php
 $options = array('ASYSTENT' =>'ASYSTENT', 'DYREKTOR' =>'DYREKTOR', 'DOKTORANT' => 'DOKTORANT', 'ADIUNKT' => 'ADIUNKT', 'SEKRETARKA' => 'SEKRETARKA');
 echo $this->Form->create('Employee');
 echo $this->Form->input('imie');
 echo $this->Form->input('nazwisko');
 echo $this->Form->input('etat',
 array('options'=>$options, 'default'=>'ASYSTENT'));
 echo $this->Form->input('id_szefa');
 echo $this->Form->input('zatrudniony');
 echo $this->Form->input('placa_pod');
 echo $this->Form->input('placa_dod');
 echo $this->Form->input('id_zesp');
 echo $this->Form->end('Zapisz');
?>
