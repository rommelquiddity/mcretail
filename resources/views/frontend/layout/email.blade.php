<html>
<head></head>
<body>
<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #fff; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
<tbody>
<tr>
<td>
	<table width="570" style="width: 570px; margin: auto;">
		<tr>
			<td style="text-align: left; background-color: #bd2e2b; padding: 8px 0 8px 13px;">
				<a href="{{ url('/') }}" style="display: inline-block;">
					<img style="height: 60px;" src="{{ asset('images/runrio-logo.png?v=0.00') }}" />
				</a>
			</td>
		</tr>
		<tr>
			<td style="padding: 8px 0 8px 13px;">
				@yield('content')
			</td>
	</table>
</td>
</tr>
</tbody>
</table>
</body>
</html>