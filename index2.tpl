<!DOCTYPE html>
<html>
<head>
</head>
	<body>

		<table>
		{foreach $customers as $customer}
		{strip}
		<tr bgcolor="{cycle values="#eeeeee,#dddddd"}">
			<td>{$customer.name}</td>
			<td>{$customer.street}</td>
			<td>{$customer.city}</td>
		</tr>
		{/strip}
		{/foreach}
		</table>
	</body>
</html>
 