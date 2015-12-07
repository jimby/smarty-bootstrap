<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Bootstrap 3 Vertical Form Layout</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

<!--
<link rel="stylesheet" href="/home/jim/bin/bootstrap-3.3.5-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/home/jim/bin/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
<script src="/home/jim/bin/bootstrap-3.3.5-dist/js/jquery.min.js"></script>
<script src="/home/jim/bin/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script> 
-->
<style type="text/css">
    /* Some custom styles to beautify this example */
    .demo-content{
        padding: 15px;
        font-size: 18px;
        min-height: 300px;
        background: #dbdfe5;
        margin-bottom: 10px;
    }
    .demo-content.bg-alt{
        background: #abb1b8;
    }
</style>
</head>
<body>

{* Smarty *}
<div class="row">
	<div class="col-md-3">
		<div class="demo-content"phooey>
	 </div>	
	
	<div class="col-md-3">
		<div class="demo-content bg-alt">{"BILL TO:"}</div>
	</div>

	<div class="col-md-3">
         <div class="demo-content">{"ship to"}</div>
    </div>

	<div class="col-md-3">
        <div class="demo-content bg-alt"></div>
     </div>
</div>
	
<!--{"BILL TO:"}<br /><br />-->

{$Contacts.name}<br />
{$Contacts.street}<br />
{$Contacts.city}{","}{$Contacts.state}{$Contacts.zip}<br /><br/>

{"SHIP TO:"}<br /><br />
{$Contacts.shipname}<br />
{$Contacts.shipstreet}<br />
{$Contacts.shipcity}{","}{$Contacts.shipstate}{$Contacts.shipzip}<br /><br/>
</body>
</html>


