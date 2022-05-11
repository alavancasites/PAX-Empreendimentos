<footer>
	<div class="container">
		<div class="colunas col-6">
			<img src="img/pax.svg" width="200" alt="PAX Empreendimetos">
			<p class="mt-1">
				É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver.
			</p>
			<a href="#" class="redes-sociais mt-5"><img src="img/instagram.svg" alt="instagram"></a>
			<a href="#" class="redes-sociais mt-5"><img src="img/whatsapp.svg" alt="whatsapp"></a>
		</div>
		<div class="colunas col-4 off-1 mobile-hidden">
			<a href="#" class="tit">navegação</a>
			<a href="#">Home</a>
			<a href="#">Sobre nós</a>
			<a href="#">Novidades</a>
			<a href="#">Contato</a>
			<a href="#">Portal do Cliente</a>
		</div>
		<div class="colunas col-4 mobile-hidden">
			<a href="#" class="tit">Empreendimentos</a>
			<a href="#">Acqua Residence</a>
			<a href="#">Darci Luiz</a>
			<a href="#">Plaza Rieck</a>
			<a href="#">Contato</a>
			<a href="#">Ello Haus</a>
		</div>
		<div class="colunas col-5">
			<a href="#" class="tit">Central de atendimento</a>
			<a href="tell:+554933163020" class="fone"><strong><img src="img/fone.svg" alt="+55  (49) 3316-3020"> +55  (49) 3316-3020</strong></a>
			<a href="mailto:paxatendimento@pax.com.br"><img src="img/mail.svg" alt="paxatendimento@pax.com.br"> paxatendimento@pax.com.br</a>
		</div>
		<div class="clear"></div>

		<div class="text-center">
			<?php auto_copyright();?>
			<?php
			function auto_copyright($startYear = null) {
				$thisYear = date('Y');
					if (!is_numeric($startYear)) {
					$year = $thisYear;
				} else {
					$year = intval($startYear);
				}
				if ($year == $thisYear || $year > $thisYear) {
					echo "Copyright &copy; $thisYear - Todos os direitos reservados";
				} else {
					echo "Copyright &copy; $year&ndash;$thisYear - Todos os direitos reservados";
				}
			 }
			 ?>
			| <a href="https://www.alavanca.digital" class="redes-sociais" target="_blank" rel="noopener">Desenvolvido por Alavanca Sites e Sistemas</a>
		</div>
	</div>

</footer>
