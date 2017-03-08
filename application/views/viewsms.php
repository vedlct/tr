<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>


<h4>Display Records From Database Using Codeigniter</h4>
<table>
    <tr>
        <td><strong>comapnyname</strong></td>
        <td><strong>amount</strong></td>
        <td><strong>date</strong></td>
    </tr>
    <?php
    //    if(isset($_POST['submit'])){
    foreach($smspost as $sms){?>
        <tr>
            <td><?php echo $sms->companyname;?></td>
            <td><?php echo $sms->amountintaka;?></td>
            <td><?php echo $sms->date;?></td>
        </tr>
    <?php }?>
</table>


</body>
</html>