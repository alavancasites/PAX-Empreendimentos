<footer>
	<div class="container">
		<div class="colunas col-6">
			<img src="img/pax.svg" width="200" alt="PAX Empreendimetos">
			<div class="">
				<a href="https://www.instagram.com/paxempreendimentos/" class="redes-sociais mt-3"><img src="img/instagram.svg" alt="instagram"></a>
				<a href="#" class="redes-sociais mt-3"><img src="img/whatsapp.svg" alt="whatsapp"></a>
			</div>
		</div>
		<div class="colunas col-4 off-1 mobile-hidden">
			<a href="javascript:;" class="tit">navegação</a>
			<a href="inicial">Home</a>
			<a href="sobre">Sobre n&oacute;s</a>
			<? /* <a href="novidades">Novidades</a> */ ?>
			<a href="contato">Contato</a>
			<?php /*?><a href="#">Portal do Cliente</a><?php */?>
		</div>
		<div class="colunas col-4 mobile-hidden">
			<a href="empreendimento" class="tit">Empreendimentos</a>
      <?php
        $criteria = new CDbCriteria();
        $criteria->order = 'ordem asc';
        $criteria->addCondition("ativo = 1");
        $criteria->addCondition("rodape = 1");
        $empreendimentos = Empreendimento::model()->findAll($criteria);
        foreach($empreendimentos as $empreendimento) {
      ?>
        <a href="empreendimento/<?=$empreendimento->idempreendimento?>/<?=Util::removerAcentos($empreendimento->titulo)?>"><?=$empreendimento->titulo ?></a>
      <?php
          }
      ?>
		</div>
		<div class="colunas col-5">
			<a href="contato" class="tit">Central de atendimento</a>
			<a href="tel:+554931992101" class="fone"><strong><img src="img/fone.svg" alt="+55  (49) 3199-2101 "> +55  (49) 3199-2101</strong></a>
			<a href="tel:+554931992108" class="fone"><strong><img src="img/fone.svg" alt="+55  (49) 3199-2108"> +55  (49) 3199-2108</strong></a>
			<a href="mailto:contato@soupax.com.br"><img src="img/mail.svg" alt="contato@soupax.com.br"> contato@soupax.com.br</a>
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
