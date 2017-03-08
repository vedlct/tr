
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Details</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>


</style>



<link href="<?php echo base_url(); ?>css/date-picker.css" rel="stylesheet" >

<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>

<script src="<?php echo base_url(); ?>js/script.js"></script>

<link href="<?php echo base_url(); ?>css/menustyle.css" rel="stylesheet" >
<body >



<h2 style="margin-left: 60px; margin-bottom: 20px">Welcome <?= $this->session->userdata('name') ?></h2>



<div class="container-fluid" >
    <div class="row">

        <?php $this->load->view('menu.php')?>
        <div class="col-lg-7">
            <div class="btn-group btn-group-justified">

                <a href="#fb" class="btn btn-default" style="color: #1ebfae" onclick="fb()" id="color1" >Facebook</a>
                <a href="#sms" class="btn btn-default" style="color:#97cc69" onclick="sms()" id="color2">SMS</a>
                <a href="#domain" class="btn btn-default" style="color: #97310e" onclick="dh()" id="color3">Domain & Hosting</a>
            </div><br>



            <div id="fb" style="display: none;">

                <form action="" method="post" id="fbform">
                    <div class="form-group">

                        <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Select a date" value="" name="date" id="datepicker" />
                        </div>
                        <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Select a date" value="" name="date2" id="datepicker2" />
                        </div>
                    </div>
                    <br><br><br>

                <div class="col-lg-6">
                        <input type="submit" class="submitbtn" name="fbsubmit"/>
                    </div>
                </form>
                <br><br><br>


            <table class="table table-striped table-hover w3-border ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Purpose</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>


                    <?php
                    $countdollar=0;
                    if(isset($_POST['fbsubmit'])){
                        $countf=1;

                        foreach ($fbpost as $fb){

                            ?>
                            <tr class="success">
                            <td><?php echo $countf?></td>
                            <td><?php echo $fb->companyname;?></td>
                            <td><?php echo $fb->perpose;?></td>
                            <td><?php echo $fb->amountindollar;?></td>
                            <td><?php echo $fb->date;?></td>
                </tr>
                        <?php $countf=$countf+1;
                            $countdollar=($fb->amountindollar)+$countdollar;
                            $countdollar=$countdollar;
                        }}?>
                    <tr>
                        <td></td>

                        <td></td>
                        <td style="float: right; font-size: large; font-weight: bold">Total :</td>
                        <td style="color: red; font-size: large;font-weight: bold"><?php echo $countdollar ; ?></td>
                    </tr>


                </tbody>
            </table>
            </div>

            <div id="sms" style="display: none;">
                <br>
                <form action="" id="smsform" method="post" >
                <div class="form-group">

                    <div class="col-lg-6">
                        <input class="form-control" type="text" placeholder="Select a date" value="" name="date3" id="datepicker3" />
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" type="text" placeholder="Select a date" value="" name="date4" id="datepicker4" />
                    </div>
                    <br>
                    <br>
                    <br>

                    <div class="col-lg-6">
                        <input  class="submitbtn" type="submit" name="smssubmit"/>
                    </div>
                </div>


                    </form>
                <br><br><br>


                <table class="table table-striped table-hover w3-border">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Company Name</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php
                        $counts=1;
                        $counttaka=0;
                        if(isset($_POST['smssubmit'])){
                        foreach ($smspost as $sms){
                        ?>
                        <tr class="success">
                        <td><?php echo $counts  ?></td>
                        <td><?php echo $sms->companyname;?></td>
                        <td><?php echo $sms->amountintaka;?></td>
                        <td><?php echo $sms->date;?></td>

                        <?php
                        $counts=$counts+1;
                        $counttaka=($sms->amountintaka)+$counttaka;
                        $counttaka=$counttaka;
                        }}?>
                    </tr>

                        <tr>
                            <td></td>


                            <td style="float: right; font-size: large; font-weight: bold">Total :</td>
                            <td style="color: red; font-size: large;font-weight: bold"><?php echo $counttaka?></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="dh" style="display: none;">
                <form action="" id="dhform" method="post">
                <div class="form-group">

                    <div class="col-lg-6">
                        <input class="form-control" type="text" placeholder="Select a date" value="" name="date5" id="datepicker5" />
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" type="text" placeholder="Select a date" value="" name="date6" id="datepicker6" />
                    </div>
                </div>
                    <br>
                    <br>
                    <br>

                    <div class="col-lg-6">
                        <input  class="submitbtn" type="submit" name="dhsubmit"/>
                    </div>
                    </form>
                <br><br><br>
                <table class="table table-striped table-hover w3-border">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Company Name</th>
                        <th>Purpose</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php
                        $countdollard=0;
                        $countd=1;
                        if(isset($_POST['dhsubmit'])){
                            foreach ($dhpost as $dh){

                                ?>
                                <tr class="success">
                                <td><?php echo $countd?></td>
                                <td><?php echo $dh->companyname;?></td>
                                <td><?php echo $dh->perpose;?></td>
                                <td><?php echo $dh->amountindollar;?></td>
                                <td><?php echo $dh->date;?></td>
                    </tr>
                            <?php
                            $countd=$countd+1;
                                $countdollard=($dh->amountindollar)+$countdollard;
                                $countdollard=$countdollard;
                            }}?>


                        <tr>
                            <td></td>

                            <td></td>
                            <td style="float: right; font-size: large; font-weight: bold">Total :</td>
                            <td style="color: red; font-size: large;font-weight: bold"><?php echo $countdollard?></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<div style="float: left; margin-left: 50px; margin-top: 350px">Devlop by <b>Tech Cloud Ltd.</b></div>
</body>

<script>
    var name;

    var url = document.URL;
    //alert (url);
    str = url.split("#").pop();
    if(str == "fb")
    {
        document.getElementById("fb").style.display='block';
        document.getElementById("color1").style.color="Red"
        document.getElementById("color1").style.fontSize = "large";
        document.getElementById("color2").style.color="#97cc69"
        document.getElementById("color2").style.fontSize = "small";
        document.getElementById("color3").style.color="#97310e"
        document.getElementById("color3").style.fontSize = "small";
    }
    else if (str == "sms")
    {
        document.getElementById("sms").style.display='block'


        document.getElementById("color2").style.color="Red"
        document.getElementById("color2").style.fontSize = "large";
        document.getElementById("color1").style.color="#1ebfae"
        document.getElementById("color1").style.fontSize = "small";
        document.getElementById("color3").style.color="#97310e"
        document.getElementById("color3").style.fontSize = "small";
    }
    else if (str == "domain") {
        document.getElementById("dh").style.display = 'block'


        document.getElementById("color3").style.color = "Red"
        document.getElementById("color3").style.fontSize = "large";
        document.getElementById("color1").style.color = "#1ebfae"
        document.getElementById("color1").style.fontSize = "small";
        document.getElementById("color2").style.color = "#97310e"
        document.getElementById("color2").style.fontSize = "small";
    }



    function fb() {

        name="facebook";
        document.getElementById("sms").style.display='none'
        document.getElementById("dh").style.display='none'
        document.getElementById("fb").style.display='block'


        document.getElementById("color1").style.color="Red"
        document.getElementById("color1").style.fontSize = "large";
        document.getElementById("color2").style.color="#97cc69"
        document.getElementById("color2").style.fontSize = "small";
        document.getElementById("color3").style.color="#97310e"
        document.getElementById("color3").style.fontSize = "small";
    }

    function sms() {

        name="sms";
        document.getElementById("fb").style.display='none'
        document.getElementById("dh").style.display='none'
        document.getElementById("sms").style.display='block'


        document.getElementById("color2").style.color="Red"
        document.getElementById("color2").style.fontSize = "large";
        document.getElementById("color1").style.color="#1ebfae"
        document.getElementById("color1").style.fontSize = "small";
        document.getElementById("color3").style.color="#97310e"
        document.getElementById("color3").style.fontSize = "small";
    }
    function dh() {

        name="dh";
        document.getElementById("fb").style.display='none'
        document.getElementById("sms").style.display='none'
        document.getElementById("dh").style.display='block'


        document.getElementById("color3").style.color="Red"
        document.getElementById("color3").style.fontSize = "large";
        document.getElementById("color2").style.color="#97cc69"
        document.getElementById("color2").style.fontSize = "small";
        document.getElementById("color1").style.color="#1ebfae"
        document.getElementById("color1").style.fontSize = "small";
    }


</script>

</html>
