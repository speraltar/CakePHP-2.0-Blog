<h1>Editar Post</h1>
<?php
echo $this->Form->create('Post', array('action'=>'edit'));
echo $this->Form->input('titulo');
echo $this->Form->input('cuerpo',array('rows'=>'3'));
echo $this->Form->input('id',array('type'=>'hidden'));
echo $this->Form->end('Guardar Post');
?>