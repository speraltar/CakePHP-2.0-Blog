<h1>Post del Blog</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Titulo</th>
		<th>Created</th>
	</tr>
	
	<!-- Aqui es doonde hacemos loop a lo largo de nuestro array $posts, imprimiendo la i -->
	
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td><?php echo $this->Html->link($post['Post']['titulo'], "/posts/view/".$post['Post']['id']); ?></td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
	