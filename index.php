<?php require_once 'config.php'; 
	require_once DBAPI; 
	include(HEADER_TEMPLATE); 
	$db = open_database(); ?>

<h1>Dashboard</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
		<a href="customers/add.php" class="btn btn-primary">
			<div class="linha">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Cliente</p>
				</div>
			</div>
		</a>
	</div>
	<!--
	<div class="linha">
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <a href="customers/add.php" class="btn btn-secondary">
                        <div class="linha">
                            <div class="col-xs-12 text-center">
                                <i class="fa fa-user-plus fa-5x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <p>Novo Cliente</p>
                            </div>
                        </div>
                    </a>
                </div>
				  -->

	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
		<a href="customers" class="btn btn-default">
			<div class="linha">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Clientes</p>
				</div>
			</div>
		</a>
	</div>
</div>
<!--
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <a href="clientes" class="btn btn-light">
                        <div class="linha">
                            <div class="col-xs-12 text-center">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <p>Clientes</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
			-->

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>