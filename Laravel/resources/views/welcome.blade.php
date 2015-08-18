<html xmlns="http://www.w3.org/1999/html">
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #5bc0de;
				background-color: #286090;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 10px;
			}

			.quote {
				font-size: 24px;
			}
			.btn-success{
				font-size: 25px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">HoraDeLaFonda</div>
				<div class="quote">Un menú para controlarlos a todos.</div>
				<div class="content">Pon tu fonda al alcance de todos!</div>
				</br>
				</br>
					<a href="{{ url('/auth/register') }}" class="btn btn-success">{{ trans('user.Register Here') }}</a>



			</div>
		</div>
	</body>
</html>
