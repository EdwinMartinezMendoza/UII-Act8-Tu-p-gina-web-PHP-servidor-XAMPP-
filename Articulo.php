<?php include('Header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Articulo</h1>
			</div>

			<div class="articulo">

			<form>
			<div class="row mb-4">
						<div class="col">
						<div class="form-outline">
							<input type="text" id="form6Example1" class="form-control" />
							<label class="form-label" for="form6Example1">Nombre del producto</label>
						</div>
						</div>
						<div class="col">
						<div class="form-outline">
							<input type="text" id="form6Example2" class="form-control" />
							<label class="form-label" for="form6Example2">Numero de serie</label>
						</div>
						</div>
						<button type="submit" class="btn btn-info btn-block mb-4">Registrar</button>
			</div>
			</form>

			</div>

			<?php include('SideBar.php'); ?>
		</div>
	</section>
	<?php include('Footer.php'); ?>
</body>
</html>