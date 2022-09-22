        
					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2022. <a href="#">project</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Ariel</a>

					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->
				
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

    <!-- scripts del proyecto -->

<?php 
if ($this->uri->segment(1)=='producto') {?> 
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/producto.js"></script><?php }
if ($this->uri->segment(1)=='categoria') {?> 
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/categoria.js"></script><?php }
if ($this->uri->segment(1)=='marca') {?> 
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/marca.js"></script><?php }
if ($this->uri->segment(1)=='cliente') {?> 
	<script type="text/javascript" src="<?php echo base_url(); ?>/js/cliente.js"></script><?php }
if ($this->uri->segment(1)=='empleado') {?> 
	<script type="text/javascript" src="<?php echo base_url(); ?>/js/empleado.js"></script><?php }
if ($this->uri->segment(1)=='usuario') {?> 
	<script type="text/javascript" src="<?php echo base_url(); ?>/js/usuario.js"></script><?php }
if ($this->uri->segment(1)=='venta') {?> 
	<script type="text/javascript" src="<?php echo base_url(); ?>/js/venta.js"></script><?php }


	



?>




</body>
</html>
