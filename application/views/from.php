<html>
<head>
    <title>tesdb</title>
</head>
<body>
<h1>Form Biodata</h1>
<?php
echo form_open('test/save', array('name' => 'myform'));
    ?>
<table border=”0″>
    <tr>
        <td>usrename</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="text" name="password"></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="submit"></td>
    </tr>
</table>
<?php
echo form_close();
?>
</body>
</html>