 <h1><?php echo utf8_encode($categoria); ?></h1>
<div class="container2">
<?php foreach($produtos as $produto): ?>
<a href="/produto/ver/<?php echo $produto['id']; ?>">
	<div class="produto">
		<img src="/assets/images/<?php echo $produto['imagem']; ?>" width="176" height="200" border="0" /><br/><br/>
		<strong><?php echo utf8_encode($produto['nome']); ?></strong><br/>
		
		<?php
		if($produto['id_categoria'] != 6){
			echo 'R$ '.$produto['preco']; 
		}
		else{

		} ?>
	</div>
</a>
<?php endforeach; ?>
</div>
<div style="clear:both"></div>
