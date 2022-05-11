<? $linkMenu = str_replace(explode("/",""),"",current(explode("?",$_SERVER['REQUEST_URI'])));?>
<div class="menuButton">Menu</div>
<div class="menuLinks">
  <a href="inicial" <?=(strpos($linkMenu,"inicial")!==false?"class='ativado'":"")?>>HOME</a>
</div>