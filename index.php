 
 <?php
 error_reporting(0);
 ini_set('display_errors', 0);
   $connect = mysqli_connect("localhost", "root", "", "optik_1");  
   mysqli_set_charset($connect,"utf8");
   $query="TRUNCATE table optik_bilgileri";
   mysqli_query($connect, $query);  

?>
 <html>  
      <head>  
           <title>PHPExcel - Export Excel file into Mysql Database using Ajax</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>  
                body  
                {  
                     margin:0;  
                     padding:0;  
                     background-color:#f1f1f1;  
                }  
                .box  
                {  
                     width:900px;  
                     padding:20px;  
                     background-color:#fff;  
                     border:1px solid #ccc;  
                     border-radius:5px;  
                     margin-top:100px;  
                }  
           </style>  
      </head>  
      <body>  
           <div class="container box">  
                <h3 align="center">Sınav Optik Form Bilgileri</h3>  
                <br /><br />  
                <br /><br />  
                <form mehtod="post" id="export_excel">  
                    <label for="x-pos">Sağ</label>
                    <input type="number" name="x-pos" id="x-pos" value="0"/>  
                    <label for="z-pos">Sol</label>
                    <input type="number" name="z-pos" id="z-pos" value="0"/>  
                    <br>

                    <label for="y-pos">Aşağı</label>
                    <input type="number" name="y-pos" id="y-pos" value="0"/>  

                    
                       <label for="t-pos">Yukarı</label>
                    <input type="number" name="t-pos" id="t-pos" value="0"/>  

                    <hr style="margin-top: 20px; margin-bottom: 20px">

                    <label>Excel Dosyası Seçiniz</label>  
                    <input type="file" name="excel_file" id="excel_file" />  
                </form>  
                <br />  
                <br />  
                <div id="result">  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#excel_file').change(function(){  
           $('#export_excel').submit();  
      });  
      $('#export_excel').on('submit', function(event){  
           event.preventDefault();  
           $.ajax({  
                url:"export.php",  
                method:"POST",  
                data:new FormData(this),  
                contentType:false,  
                processData:false,  
                success:function(data){  
                     $('#result').html(data);  
                     $('#excel_file').val('');  
                }  
           });  
      });  
 });  
 </script>  