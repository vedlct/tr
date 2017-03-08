
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>


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
            <form class="form-horizontal well" action="changepassword" method="post">
                <fieldset>


                    <div class="form-group">
                        <label class="col-lg-2 control-label">New UserName</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="New Password" name="nname">
                        </div>
                </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">New Password</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="New Password" name="npassword">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Confirm Password</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Confirm Password" name="cpassword">
                        </div>
                    </div>



                    <br>



                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <input type="submit" class="btn btn-primary" name="submit">
                        </div>
                    </div>

                </fieldset>
                <div style="float: right">Devloped by <b>Tech Cloud Ltd.</b></div>
                <br>
            </form>
        </div>
    </div>

</div>


</body>
<script>

    function myfunc() {
        var x= document.getElementById("dropdown").value;
        //alert(x);

        switch (x){

            case "Facebook":
                document.getElementById("div3").style.display='none'
                document.getElementById("div4").style.display='none'
                document.getElementById("div5").style.display='none'

                //alert("fb");
                document.getElementById("div1").style.display='block'
                document.getElementById("div2").style.display='block'
                break;
            case "SMS":
                document.getElementById("div1").style.display='none'
                document.getElementById("div2").style.display='none'
                document.getElementById("div4").style.display='none'
                document.getElementById("div5").style.display='none'

                //alert("sms");
                document.getElementById("div3").style.display='block'
                break;
            case "DomainHosting":
                //alert("domain");

                document.getElementById("div1").style.display='none'
                document.getElementById("div2").style.display='none'
                document.getElementById("div3").style.display='none'



                document.getElementById("div4").style.display='block'
                document.getElementById("div5").style.display='block'
                break;
        }
    }
</script>
</html>
