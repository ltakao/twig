{% extends 'base.tpl.php' %}

{% block title %}
	Home
{% endblock %}	

{% block featured %}
	<div class="jumbotron">
		<h1>Hello, world!</h1>
		<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
	</div>
{% endblock %}

{% block content %}
	<div class="container" >
		<div class="row">
			<div class="col-md-12">

				<div class="alert alert-info text-center">
					<strong>Página Inicial</strong>
				</div>

			</div>
		</div>
	</div>
{% endblock %}	

{% block js %}   
	<!-- Herda declaração do base.tpl.php -->
	{{ parent() }}

	<!-- Declaração do javascript adicional -->
{% endblock %}