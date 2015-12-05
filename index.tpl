<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Bootstrap 3 Vertical Form Layout</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>

{* Smarty *}

{"BILL TO:"}<br /><br />
{$Contacts.name}<br />
{$Contacts.street}<br />
{$Contacts.city}{","}{$Contacts.state}{$Contacts.zip}<br /><br/>

{"SHIP TO:"}<br /><br />
{$Contacts.shipname}<br />
{$Contacts.shipstreet}<br />
{$Contacts.shipcity}{","}{$Contacts.shipstate}{$Contacts.shipzip}<br /><br/>
</body>
</html>

