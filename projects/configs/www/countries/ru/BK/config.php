<html>
<head>
<link rel="stylesheet" href="../templates/bootstrap.min.css">
<link rel="stylesheet" href="../templates/bootstrap-theme.min.css">
<script src="../templates/todisable.js"></script>
</head>
<body>
<form class="form-horizontal" name="form" method="POST" action="process.php">

<img style="float: left;" src="../templates/logo.png" />
<div style="float: left; margin-right: 30px;"><b>RU</b></div>
<div class="container">

	<div class="row">
		<div class="col-xs-6 col-md-4">
			<div class="form-group">

				<caption><b>Router model:</b></caption>
				<div class="radio">
					<label class="radio-inline"><input type="radio" name="template" value="2801" id="2801">Cisco 2801</label>
					<label class="radio-inline"><input type="radio" name="template" value="881-K9" id="881-K9" checked="checked">Cisco 881-K9</label>
				</div>
			</div>
		</div>
	</div>
</div>
<hr />
<div class="container-fluid">
	<div class="row"><div class="col-md-3 col-xs-6" style="text-align: right;"><h3><b>Config's parameters:</b></h3></div></div>
	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">Hostname (COUNTRY_BRAND_CITY_STREET):</label></div>
		<div class="cold-md-9 col-xs-6">
			<input class="form-control" type="text" name="hostname" size="40" style="width: 300px;" />
		</div>
	</div>
		
	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">Primary encryption router IP:</label></div>
		<div class="cold-md-9 col-xs-6">
			<select class="form-control" name="szyfr_pri" style="width: 150px;">
				<option>195.190.24.125</option>
				<option>195.190.24.123</option>
				<option>195.190.24.124</option>
				<option>195.190.24.126</option>
			</select>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">Secondary encryption router IP:</label></div>
		<div class="cold-md-9 col-xs-6">
			<select class="form-control" name="szyfr_sec" style="width: 150px;">
				<option>195.190.24.126</option>
				<option>195.190.24.124</option>
				<option>195.190.24.125</option>
				<option>195.190.24.123</option>
			</select>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">Tertiary encryption router IP:</label></div>
		<div class="cold-md-9 col-xs-6">
			<select class="form-control" name="szyfr_tri" style="width: 150px;">
				<option>195.190.24.123</option>
				<option>195.190.24.125</option>
				<option>195.190.24.126</option>
				<option>195.190.24.124</option>
			</select>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">Interface Loopback0 IP:</label></div>
		<div class="cold-md-9 col-xs-6">
			<input class="form-control" type="text" name="loop0" size="15" style="width: 150px;"/>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">Interface Tunnel1 IP:</label></div>
		<div class="cold-md-9 col-xs-6">
			<input class="form-control" type="text" name="tunnel1_ip" size="15" style="width: 150px;"/>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">Interface Tunnel2 IP:</label></div>
		<div class="cold-md-9 col-xs-6">
			<input class="form-control" type="text" name="tunnel2_ip" size="15" style="width: 150px;"/>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">Interface Tunnel3 IP:</label></div>
		<div class="cold-md-9 col-xs-6">
			<input class="form-control" type="text" name="tunnel3_ip" size="15" style="width: 150px;"/>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">LAN IP:</label></div>
		<div class="cold-md-9 col-xs-6">
			<input class="form-control" type="text" name="lan_ip" size="15" style="width: 150px;"/>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">WAN IP:</label></div>
		<div class="cold-md-9 col-xs-6">
			<input class="form-control" type="text" name="wan_ip" size="15" style="width: 150px;" value="80.80.80.2"/>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">WAN netmask:</label></div>
		<div class="cold-md-9 col-xs-6">
			<input class="form-control" type="text" name="wan_netmask" size="15" style="width: 150px;" value="255.255.255.252"/>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">WAN GW:</label></div>
		<div class="cold-md-9 col-xs-6">
			<input class="form-control" type="text" name="wan_gw" size="15" style="width: 150px;" value="80.80.80.1"/>
		</div>
	</div>

	<div class="form-group form-group-sm">
		<div class="col-md-3 col-xs-6" style="text-align: right;"><label class="control-label">SAP:</label></div>
		<div class="cold-md-9 col-xs-6">
			<input class="form-control" type="text" name="sap" size="15" style="width: 80px;"/>
		</div>
	</div>

	<div style="margin-left: 250px;">
		<button type="submit" class="btn btn-primary">Generate</button>
		<button type="reset" class="btn btn-success">Clear</button>
	</div>
</div>
</form>
</body>
</html>