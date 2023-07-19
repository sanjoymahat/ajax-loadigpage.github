<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax CRUD</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>PHP & Ajax CRUD</h1>
      </td>
       <tr>
         <td id="table-load">
          <input type="button" id="load-button" value=" load data" >
          <!-- ekhaner id ta tula hobe load-button ajax er jono -->
        </td>
       </tr>
    </tr>
    <tr>
      <td id="table-data">
        <table border = "1" width="100%" cellspacing="0" cellpadding="10px" >
           <tr>
             <th>First Name :</th>
              <th>Last Name :</th>
           </tr>   
     </td>
      <td align ="center">1</td>
      <td>sanjoy mahato</td>
    </tr>
     </table>

     <script type="text/javascript" src="js/jquery.js"></script>
     <!-- ekhane jquery file include korlam -->
     <script type="text/javascript">
       $(document).ready(function(){
        // ekta ho6e basic php code ajax er jono
        $("#load-button").on("click",function(e){
          // $("#load-button")eta ho6e selecter ja select kore6e id ke ar  .on("click",function(e) eta ho6e event er duto parametter thake first and second first parametter te click function lagiyee6i  e niye6i event ke denote korar jono{
            // er por ajax er code suru hobe
            $.ajax({
              url:"ajax-loader.php",
              // ei url ta chole jabe ajax-load.php te jekhane baki database code banbo
              type:"POST",
              //ekhane type du doroner hoi ekta  get ar ekta post ei type dile form er jaigate post ba get method use korte hoi na
              success:function(data){
                //success er mane holo ajax-load.php file je data return korbe ar function(data) te giye store hobe take dekhanor jono eta use kora hoi
                $("#table-data").html(data);
                //function(data) te je data return hobe ta .html(data); te giye show hobe
              }
              
            });

        });



      });
     </script>
</body>
</html>
