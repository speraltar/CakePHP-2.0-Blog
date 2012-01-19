<h1>Agregar Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('titulo');
echo $this->Form->input('cuerpo',array('rows'=>'3'));
echo $this->Form->end('Guardar Post');
?>