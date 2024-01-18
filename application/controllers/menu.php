
<?php 
$Permisos = "SELECT * FROM login Where log_usuario = '".$_SESSION['Usuario']."'";
$per = $this->db->query($Permisos)->result();
if($per){
  foreach ($per as $key) {
?>
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url();?>index.php/Categoria/show">
          <i class="bi bi-grid"></i>
          <span>Categoria</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>index.php/Producto/show">
          <i class="bi bi-person"></i>
          <span>Productos</span>
        </a>
      </li><!-- End Profile Page Nav -->
  </aside><!-- End Sidebar-->
<?php 
 }
}
?>