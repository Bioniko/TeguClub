<?php 
$Permisos = "SELECT * FROM login Where log_usuario = '".$_SESSION['Usuario']."'";
$per = $this->db->query($Permisos)->result();
if($per){
  foreach ($per as $key) {
?>
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <?php
    if(isset($_COOKIE['log_id']) && !Empty($_COOKIE['log_id']) && $_COOKIE['log_id'] == 2){ 
    ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>index.php/Usuarios/show">
        <i class="fa-solid fa-user-lock"></i>
          <span>Usuarios</span>
        </a>
    </li>
    <?php
    } 
    ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>index.php/Empresa/show">
        <i class="fa-solid fa-building"></i>
          <span>Empresa</span>
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo base_url();?>index.php/Categoria/show">
      <i class="fa-solid fa-list"></i>
        <span>Categoria</span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>index.php/Producto/show">
        <i class="fa-solid fa-box"></i>
          <span>Producto</span>
        </a>
    </li>
  </ul>
</aside>
<?php 
 }
}
?>