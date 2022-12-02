 <?php  
 error_reporting(0);
 ini_set('display_errors', 0);
 //export.php  
 if(!empty($_FILES["excel_file"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "optik_1");  
      mysqli_set_charset($connect,"utf8");
      $file_array = explode(".", $_FILES["excel_file"]["name"]);  
      if($file_array[1] == "xls" || $file_array[1] == "xlsx" )
      {  
           include("Classes/PHPExcel/IOFactory.php");  
           $output = '';  
           $output .= "  
           <label class='text-success'>Dosya Verileri Eklendi</label>  
                <table class='table table-bordered'>  
                     <tr>  
                          <th>Optik Formlar Tümünü Görüntüle</th>  
                      
                          <th>Optik Önizleme</th>  
                          <th>Optik Görüntüle</th>  


                     </tr>  
                     ";  
           $object = PHPExcel_IOFactory::load($_FILES["excel_file"]["tmp_name"]);  
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=2; $row<=$highestRow; $row++)  
                {  
                     $tcno = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
                     $ad = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
                     $salon_no = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                     $sertifika = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());  
                    
                     if(strlen($salon_no)==1){
                        if($sertifika=="SRC1"){
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=1";
                        }
                        else if($sertifika=="SRC2") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=2";
                        }
                        else if($sertifika=="SRC3") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=3";
                        }
                        else if($sertifika=="SRC4") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=4";
                        }
                        else if($sertifika=="SRC5") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=5";
                        }
                        else if($sertifika=="ODY1") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=6";
                        }
                        else if($sertifika=="ODY2") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=7";
                        }
                        else if($sertifika=="ODY3") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=8";
                        }
                        else if($sertifika=="ODY4") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=9";
                        }
                        else if($sertifika=="ÜDY1") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=10";
                        }
                        else if($sertifika=="ÜDY2") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=11";
                        }
                        else if($sertifika=="ÜDY3") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=12";
                        }
                        else if($sertifika=="ÜDY4") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=13";
                        }
                   
                    }
                    else if(strlen($salon_no)==2 && ($salon_no[0])=="0"){
                       

                        if($sertifika=="SRC1"){
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=1";
                        }
                        else if($sertifika=="SRC2") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=2";
                        }
                        else if($sertifika=="SRC3") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=3";
                        }
                        else if($sertifika=="SRC4") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=4";
                        }
                        else if($sertifika=="SRC5") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=5";
                        }
                        else if($sertifika=="ODY1") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=6";
                        }
                        else if($sertifika=="ODY2") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=7";
                        }
                        else if($sertifika=="ODY3") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=8";
                        }
                        else if($sertifika=="ODY4") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=9";
                        }
                        else if($sertifika=="ÜDY1") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=10";
                        }
                        else if($sertifika=="ÜDY2") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=11";
                        }
                        else if($sertifika=="ÜDY3") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=12";
                        }
                        else if($sertifika=="ÜDY4") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='0$salon_no' ,kullanici_sertifika=13";
                        }

                        
                    }
                    else{
                    $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon=$salon_no ,kullanici_sertifika=$sertifika";

                    if($sertifika=="SRC1"){
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=1";
                        }
                        else if($sertifika=="SRC2") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=2";
                        }
                        else if($sertifika=="SRC3") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=3";
                        }
                        else if($sertifika=="SRC4") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=4";
                        }
                        else if($sertifika=="SRC5") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=5";
                        }
                        else if($sertifika=="ODY1") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=6";
                        }
                        else if($sertifika=="ODY2") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=7";
                        }
                        else if($sertifika=="ODY3") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=8";
                        }
                        else if($sertifika=="ODY4") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=9";
                        }
                        else if($sertifika=="ÜDY1") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=10";
                        }
                        else if($sertifika=="ÜDY2") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=11";
                        }
                        else if($sertifika=="ÜDY3") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=12";
                        }
                        else if($sertifika=="ÜDY4") {
                         $query =  "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_tc=$tcno,kullanici_salon='$salon_no' ,kullanici_sertifika=13";
                        }
                    }
                     mysqli_query($connect, $query); 
                }    


                     $output .= '  
                     
                     <tr>  
                          <td>Optik Formlar</td>  
                          <td><a href="kullanici.php?em_id='.$row['id'].'&x='.(int)$_POST["x-pos"].'&y='.(int)$_POST["y-pos"].'&z='.(int)$_POST["z-pos"].'&t='.(int)$_POST["t-pos"].'" target="_blank">Optik Önizleme</a> </td>    
                          <td><a href="optik_incele.php?em_id='.$row['id'].'&x='.(int)$_POST["x-pos"].'&y='.(int)$_POST["y-pos"].'&z='.(int)$_POST["z-pos"].'&t='.(int)$_POST["t-pos"].'" target="_blank">Optik Görüntüle</a> </td>    
                          
                        



                       
                     </tr>  
                     ';  
                
              }
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo '<label class="text-danger">Yanlış formatta dosya yüklediniz.Geçerli formatlar "xls" ve "xlsx."</label>';  
      }  
 }  
 ?>  