<?php if((AuthComponent::user('id'))){ ?>
<!-- start: Main Menu -->
<div id="sidebar-left" class="col-lg-2 col-sm-1 ">
          
  <div class="sidebar-nav nav-collapse collapse navbar-collapse">
    <ul class="nav main-menu">
      
      <li><a href="http://www.munhak.com.br/sistema/"><i class="icon-coffee"></i><span class="hidden-sm text"> Sistema</span></a></li>  
      
      <li>
        <a class="dropmenu" href="#"><i class=" icon-list-alt"></i><span class="hidden-sm text"> Avisos</span> <span class="chevron closed"></span></a>
        <ul>
        <?php if(AuthComponent::user('role') == 'admin') { ?>
          <li><a class="submenu" href="http://www.munhak.com.br/sistema/avisos/"><i class="icon-edit"></i><span class="hidden-sm text"> Listar</span></a></li>
          <li><a class="submenu" href="http://www.munhak.com.br/sistema/avisos/add"><i class="icon-edit"></i><span class="hidden-sm text"> Cadastrar</span></a></li>
        <?php } else { ?>
         <li><a class="submenu" href="http://www.munhak.com.br/sistema/avisos/my"><i class="icon-edit"></i><span class="hidden-sm text"> Informações</span></a></li>
        <?php } ?>
        </ul>
      </li>

      <li>
        <a class="dropmenu" href="#"><i class=" icon-list-alt"></i><span class="hidden-sm text"> Pesquisas</span> <span class="chevron closed"></span></a>
        <ul>
        <?php if(AuthComponent::user('role') == 'admin') { ?>
          <li><a class="submenu" href="http://www.munhak.com.br/sistema/pesquisas/"><i class="icon-edit"></i><span class="hidden-sm text"> Listar</span></a></li>
          <li><a class="submenu" href="http://www.munhak.com.br/sistema/pesquisas/add"><i class="icon-edit"></i><span class="hidden-sm text"> Cadastrar</span></a></li>
        <?php } else { ?>
         <li><a class="submenu" href="http://www.munhak.com.br/sistema/pesquisas/my"><i class="icon-edit"></i><span class="hidden-sm text"> Informações</span></a></li>
        <?php } ?>
        </ul>
      </li>

      <li>
        <a class="dropmenu" href="#"><i class=" icon-list-alt"></i><span class="hidden-sm text"> Arquivos</span> <span class="chevron closed"></span></a>
        <ul>
        <?php if(AuthComponent::user('role') == 'admin') { ?>
          <li><a class="submenu" href="http://www.munhak.com.br/sistema/uploads/"><i class="icon-edit"></i><span class="hidden-sm text"> Listar</span></a></li>
          <li><a class="submenu" href="http://www.munhak.com.br/sistema/uploads/add"><i class="icon-edit"></i><span class="hidden-sm text"> Cadastrar</span></a></li>
          <?php } else { ?>
         <li><a class="submenu" href="http://www.munhak.com.br/sistema/uploads/my"><i class="icon-edit"></i><span class="hidden-sm text"> Informações</span></a></li>
        <?php } ?>
        </ul>
      </li>
      <?php if(AuthComponent::user('role') == 'admin') { ?>
      <li>
        <a class="dropmenu" href="#"><i class="icon-user"></i><span class="hidden-sm text">Usuários</span> <span class="chevron closed"></span></a>
        <ul>
          <li><a class="submenu" href="http://www.munhak.com.br/sistema/users/"><i class="icon-edit"></i><span class="hidden-sm text"> Listar</span></a></li>
          <li><a class="submenu" href="http://www.munhak.com.br/sistema/users/add"><i class="icon-edit"></i><span class="hidden-sm text"> Cadastrar</span></a></li>
        </ul> 
      </li>
      <?php } ?>
      <li>
        <a href="/sistema/users/logout"><i class=" icon-off"></i><span class="hidden-sm text"> Sair</span> </a>
        
      </li>
      
    </ul>
  </div>
  <a href="#" id="main-menu-min" class="full visible-md visible-lg"><i class="icon-double-angle-left"></i></a>

</div>
<!-- end: Main Menu -->
<?php } ?>