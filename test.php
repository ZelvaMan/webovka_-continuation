<!DOCTYPE html>
<html>
  <head>
  	<title>Submit a form using JavaScript onclick event</title>
  </head>
  <body>
    <form id="my_form"   action="" method="POST"enctype="multipart/form-data">
        <input type="file" name="file"  placeholder="Enter Your E-mail" onchange="submit_form()"/>
    </form>

</script>
    <script>
    function submit_form(){
        console.log("fsdfds");
        var form = document.getElementById("my_form");
        form.submit();
    }
    </script>
    
  </body>
</html>
<?php
if(isset($_FILES['file']))
 print_r($_FILES);

