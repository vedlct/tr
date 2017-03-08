<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>


<h4>Display Records From Database Using Codeigniter</h4>
<table>
    <tr>
        <td><strong>UserName</strong></td>
        <td><strong>Password</strong></td>
    </tr>
    <?php
//    if(isset($_POST['submit'])){
    foreach($user as $post){?>
        <tr>
            <td><?php echo $post->username;?></td>
            <td><?php echo $post->password;?></td>
        </tr>
    <?php }?>
</table>


</body>
</html>