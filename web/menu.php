<? $linkMenu = str_replace(explode("/",""),"",current(explode("?",$_SERVER['REQUEST_URI'])));?>
<nav class="menu-mobile">
  <ul>
    <li> <a href="inicial" <?=(strpos($linkMenu,"inicial")!==false?"class='ativado'":"")?>> Home </a> </li>
    <li> <a href="sobre" <?=(strpos($linkMenu,"sobre")!==false?"class='ativado'":"")?>> Sobre n&oacute;s </a> </li>
    <li> <a href="empreendimentos" <?=(strpos($linkMenu,"empreendimento")!==false?"class='ativado'":"")?>> Empreendimentos </a> </li>
    <? /* <li> <a href="novidades" <?=(strpos($linkMenu,"novidade")!==false?"class='ativado'":"")?>> Novidades </a> </li> */ ?>
    <li> <a href="contato" <?=(strpos($linkMenu,"contato")!==false?"class='ativado'":"")?>> Contato </a> </li>
    <li class="portal"> <a href="#"> <img src="img/portal.svg" alt="Portal do CLiente"> Portal do Cliente </a> </li>
  </ul>
</nav>
