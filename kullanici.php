<?php
include_once 'FPDF/fpdf.php';
include 'baglan.php';

$pdf = new FPDF();

  
  function turkce($k)
  {
      return iconv('utf-8','iso-8859-9',$k);
  }
  //table kolonlar
  $pdf->setLeftMargin(10 + $_GET["x"]-$_GET['z']);
  $pdf->SetTopMargin($_GET["y"]-$_GET['t']);
  $pdf->setTextColor(0,0,0);



  //table row



        $query = "SELECT * FROM optik_bilgileri ";
        $result = $con->prepare($query);
        $result->execute();

        if($result->rowCount()!=0) 
        {
           while($kullanicilar = $result->fetch())
           {

            $pdf->AddPage();
            $pdf->Image('img/optik_son.jpeg',0,0,210,297, "JPEG");

            $pdf->AddFont('arial_tr','','arial_tr.php');
            $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
            $pdf->SetFont('arial_tr','',11);
            $k = $kullanicilar['kullanici_adi'];
            
            $t = turkce("$k");
            


            

            $pdf->Cell(35);  //yatay

            
            $pdf->Cell(15,107,implode(' ',str_split(strtoupper($t))),"0","0","L");   

            $pdf->Ln(30);  //dikey
            
            
            $pdf->Cell(35);  //yatay

            
            $pdf->Cell(40,62,implode(' ',str_split($kullanicilar['kullanici_tc'])),"0","0","L"); 


           
           
          




   

            $pdf->Ln(5);  //dikey
            
            if(isset($kullanicilar['kullanici_sertifika'])) {
              if($kullanicilar['kullanici_sertifika']==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+149.3,112+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+149.3,116.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+149.3,120.6,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+149.3,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+149.3,129.2+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+166.2,112.2,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+166.2,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+166.2,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+166.2,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==10) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+183.1,112.2+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==11) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+183.1,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==12) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+183.1,120.6+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               if($kullanicilar['kullanici_sertifika']==13) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+183.1,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");
               } 
               
            } 
        

            $pdf->Ln(48.2);  //dikey

            

            $pdf->Cell(3);  //yatay

            $pdf->Cell(40,28,implode('  ',str_split($kullanicilar['kullanici_tc'])),"0","0","L"); 
               //80:0  TC NO
           //Dikey aralık: 4.3
           //yatay aralık:4.3
       
            if(isset($kullanicilar['kullanici_tc'][0])) {


              if($kullanicilar['kullanici_tc'][0]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][0]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][0]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][0]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][0]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][0]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][0]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][0]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][0]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,133.2,3, 3, "PNG");

              }else if($kullanicilar['kullanici_tc'][0]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            
            }

            if(isset($kullanicilar['kullanici_tc'][1])) {
              if($kullanicilar['kullanici_tc'][1]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18.1,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][1]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18.1,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][1]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18.1,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][1]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18.1,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][1]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18.1,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][1]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18.1,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][1]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18.1,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][1]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18.1,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][1]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18.1,133.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][1]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18.1,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            
            }

            if(isset($kullanicilar['kullanici_tc'][2])) {
              if($kullanicilar['kullanici_tc'][2]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][2]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][2]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][2]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][2]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][2]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][2]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][2]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][2]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,133.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][2]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            
            }

            if(isset($kullanicilar['kullanici_tc'][3])) {
              if($kullanicilar['kullanici_tc'][3]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.6,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][3]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.6,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][3]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.6,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][3]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.6,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][3]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.6,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][3]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.6,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][3]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.6,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][3]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.6,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][3]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.6,133.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][3]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.6,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            }

            if(isset($kullanicilar['kullanici_tc'][4])) {
              if($kullanicilar['kullanici_tc'][4]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+30.8,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][4]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+30.8,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][4]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+30.8,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][4]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+30.8,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][4]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+30.8,116.4 +$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][4]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+30.8,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][4]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+30.8,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][4]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+30.8,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][4]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+30.8,133.2,3, 3, "PNG");

              }else if($kullanicilar['kullanici_tc'][4]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+30.8,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            
            }

            if(isset($kullanicilar['kullanici_tc'][5])) {
              if($kullanicilar['kullanici_tc'][5]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35.1,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][5]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35.1,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][5]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35.1,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][5]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35.1,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][5]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35.1,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][5]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35.1,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][5]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35.1,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][5]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35.1,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][5]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35.1,133.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][5]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35.1,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            
            }

            if(isset($kullanicilar['kullanici_tc'][6])) {
              if($kullanicilar['kullanici_tc'][6]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][6]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][6]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][6]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][6]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][6]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][6]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][6]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][6]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,133.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][6]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            
            }

            if(isset($kullanicilar['kullanici_tc'][7])) {
              if($kullanicilar['kullanici_tc'][7]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.6,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][7]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.6,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][7]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.6,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][7]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.6,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][7]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.6,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][7]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.6,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][7]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.6,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][7]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.6,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][7]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.6,133.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][7]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.6,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            
            }


            if(isset($kullanicilar['kullanici_tc'][8])) {
              if($kullanicilar['kullanici_tc'][8]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+48,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][8]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+48,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][8]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+48,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][8]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+48,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][8]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+48,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][8]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+48,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][8]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+48,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][8]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+48,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][8]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+48,133.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][8]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+48,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            
            }

            if(isset($kullanicilar['kullanici_tc'][9])) {
              if($kullanicilar['kullanici_tc'][9]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52.3,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][9]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52.3,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][9]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52.3,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][9]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52.3,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][9]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52.3,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][9]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52.3,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][9]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52.3,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][9]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52.3,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][9]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52.3,133.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][9]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52.3,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            
            }

            if(isset($kullanicilar['kullanici_tc'][10])) {
              if($kullanicilar['kullanici_tc'][10]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.4,99.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][10]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.4,103.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][10]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.4,107.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_tc'][10]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.4,112+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][10]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.4,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][10]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.4,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][10]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.4,124.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][10]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.4,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][10]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.4,133.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_tc'][10]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.4,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");
              } 

            
            }
            $pdf->Cell(11);  //yatay //DEĞİŞİKLİK
            $pdf->Cell(40,28,implode('  ',str_split($kullanicilar['kullanici_salon'])),"0","0","L"); 
           //4.3 dikey
            if(isset($kullanicilar['kullanici_salon'][0])) {
              if($kullanicilar['kullanici_salon'][0]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.9,99.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_salon'][0]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.9,103.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }

              else if($kullanicilar['kullanici_salon'][0]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.9,107.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_salon'][0]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.9,112.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_salon'][0]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.9,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_salon'][0]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.9,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_salon'][0]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.9,124.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_salon'][0]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.9,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }

              else if($kullanicilar['kullanici_salon'][0]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.9,133.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }

              else if($kullanicilar['kullanici_salon'][0]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.9,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }

             }

           
             if(isset($kullanicilar['kullanici_salon'][1])) {
              if($kullanicilar['kullanici_salon'][1]==0) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69.1,99.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($kullanicilar['kullanici_salon'][1]==1) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69.1,103.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }

              else if($kullanicilar['kullanici_salon'][1]==2) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69.1,107.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_salon'][1]==3) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69.1,112.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_salon'][1]==4) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69.1,116.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_salon'][1]==5) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69.1,120.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_salon'][1]==6) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69.1,124.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }else if($kullanicilar['kullanici_salon'][1]==7) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69.1,129.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }

              else if($kullanicilar['kullanici_salon'][1]==8) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69.1,133.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }

              else if($kullanicilar['kullanici_salon'][1]==9) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69.1,137.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }

             }

             



            $k = $kullanicilar['kullanici_adi'];
            $t = turkce("$k");

            $pdf->Ln(60);  //dikey
           
            $pdf->Ln(3);  //dikey
            $pdf->Cell(4);  //yatay
            $pdf->AddFont('arial_tr','','arial_tr.php');
            $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
            $pdf->SetFont('arial_tr','B',6);
            $pdf->Cell(15,28,implode('     ',str_split(strtoupper($t))),"0","0","L");   
           

            $pdf->Cell(20);  //yatay
            $pdf->Ln(10);  //dikey


            

            //  Ad Soyad

            

            if(isset($t[0])) {
              
              if($t[0]=="A" || $t[0]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[0]=="B" || $t[0]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[0]=="C" || $t[0]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]==turkce("Ç") || $t[0]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="D" || $t[0]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="E" || $t[0]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="F" || $t[0]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="G" || $t[0]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]==turkce("Ğ") || $t[0]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="H" || $t[0]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]==turkce("I") || $t[0]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]==turkce("İ") || $t[0]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="J" || $t[0]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="K" || $t[0]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="L" || $t[0]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="M" || $t[0]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="N" || $t[0]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="O" || $t[0]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]==turkce("Ö") || $t[0]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="P" || $t[0]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="R" || $t[0]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="S" || $t[0]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]==turkce("Ş") || $t[0]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="T" || $t[0]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="U" || $t[0]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]==turkce("Ü") || $t[0]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="V" || $t[0]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="Y" || $t[0]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]=="Z" || $t[0]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+14,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }

            if(isset($t[1])) {
              
              if($t[1]=="A" || $t[1]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[1]=="B" || $t[1]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[1]=="C" || $t[0]=="1") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]==turkce("Ç") || $t[1]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="D" || $t[1]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="E" || $t[1]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="F" || $t[1]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="G" || $t[1]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]==turkce("Ğ") || $t[1]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="H" || $t[1]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]==turkce("I") || $t[1]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]==turkce("İ") || $t[1]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="J" || $t[1]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="K" || $t[1]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="L" || $t[1]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="M" || $t[1]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="N" || $t[1]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="O" || $t[1]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]==turkce("Ö") || $t[1]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="P" || $t[1]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="R" || $t[1]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="S" || $t[1]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]==turkce("Ş") || $t[1]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="T" || $t[1]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="U" || $t[1]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]==turkce("Ü") || $t[1]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="V" || $t[1]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="Y" || $t[1]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[1]=="Z" || $t[1]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+18,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }

            if(isset($t[2])) {
              
              if($t[2]=="A" || $t[2]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[2]=="B" || $t[2]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[2]=="C" || $t[2]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]==turkce("Ç") || $t[2]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="D" || $t[2]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="E" || $t[2]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="F" || $t[2]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="G" || $t[2]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]==turkce("Ğ") || $t[2]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="H" || $t[2]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]==turkce("I") || $t[2]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]==turkce("İ") || $t[2]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="J" || $t[2]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="K" || $t[2]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="L" || $t[2]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="M" || $t[2]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="N" || $t[2]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="O" || $t[2]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]==turkce("Ö") || $t[2]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="P" || $t[2]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="R" || $t[2]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="S" || $t[2]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]==turkce("Ş") || $t[2]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="T" || $t[2]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="U" || $t[2]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]==turkce("Ü") || $t[2]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="V" || $t[2]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="Y" || $t[2]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[2]=="Z" || $t[2]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+22.3,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }

            if(isset($t[3])) {
              
              if($t[3]=="A" || $t[3]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[3]=="B" || $t[3]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[3]=="C" || $t[3]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]==turkce("Ç") || $t[3]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="D" || $t[3]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="E" || $t[3]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="F" || $t[3]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="G" || $t[3]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]==turkce("Ğ") || $t[3]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="H" || $t[3]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]==turkce("I") || $t[3]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]==turkce("İ") || $t[3]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="J" || $t[3]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="K" || $t[3]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="L" || $t[3]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="M" || $t[3]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="N" || $t[3]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="O" || $t[3]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]==turkce("Ö") || $t[3]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="P" || $t[3]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="R" || $t[3]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="S" || $t[3]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]==turkce("Ş") || $t[3]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="T" || $t[3]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="U" || $t[3]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]==turkce("Ü") || $t[3]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="V" || $t[3]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="Y" || $t[3]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[3]=="Z" || $t[3]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+26.8,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }

            if(isset($t[4])) {
              
              if($t[4]=="A" || $t[4]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[4]=="B" || $t[4]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[4]=="C" || $t[4]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]==turkce("Ç") || $t[4]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="D" || $t[4]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="E" || $t[4]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="F" || $t[4]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="G" || $t[4]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]==turkce("Ğ") || $t[4]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="H" || $t[4]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]==turkce("I") || $t[4]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]==turkce("İ") || $t[4]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="J" || $t[4]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="K" || $t[4]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="L" || $t[4]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="M" || $t[4]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="N" || $t[4]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="O" || $t[4]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]==turkce("Ö") || $t[4]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="P" || $t[4]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="R" || $t[4]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="S" || $t[4]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]==turkce("Ş") || $t[4]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="T" || $t[4]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="U" || $t[4]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]==turkce("Ü") || $t[4]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="V" || $t[4]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="Y" || $t[4]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[4]=="Z" || $t[4]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+31,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }

            if(isset($t[5])) {
              
              if($t[5]=="A" || $t[5]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[5]=="B" || $t[5]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[5]=="C" || $t[5]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]==turkce("Ç") || $t[5]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="D" || $t[5]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="E" || $t[5]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="F" || $t[5]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]==turkce("Ğ") || $t[5]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="Ğ" || $t[5]=="ğ") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="H" || $t[5]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]==turkce("I") || $t[5]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]==turkce("İ") || $t[5]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="J" || $t[5]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="K" || $t[5]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="L" || $t[5]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="M" || $t[5]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="N" || $t[5]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="O" || $t[5]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]==turkce("Ö") || $t[5]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="P" || $t[5]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="R" || $t[5]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="S" || $t[5]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]==turkce("Ş") || $t[5]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="T" || $t[5]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="U" || $t[5]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]==turkce("Ü") || $t[5]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="V" || $t[5]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="Y" || $t[5]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[5]=="Z" || $t[5]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+35,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }

            if(isset($t[6])) {
              
              if($t[6]=="A" || $t[6]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[6]=="B" || $t[6]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[6]=="C" || $t[6]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]==turkce("Ç") || $t[6]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="D" || $t[6]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="E" || $t[6]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="F" || $t[6]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="G" || $t[6]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]==turkce("Ğ") || $t[6]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="H" || $t[6]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]==turkce("I") || $t[6]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]==turkce("İ") || $t[6]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="J" || $t[6]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="K" || $t[6]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="L" || $t[6]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="M" || $t[6]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="N" || $t[6]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="O" || $t[6]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]==turkce("Ö") || $t[6]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="P" || $t[6]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="R" || $t[6]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="S" || $t[6]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]==turkce("Ş") || $t[6]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="T" || $t[6]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="U" || $t[6]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]==turkce("Ü") || $t[6]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="V" || $t[6]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="Y" || $t[6]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[6]=="Z" || $t[6]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+39.4,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }


            if(isset($t[7])) {
              
              if($t[7]=="A" || $t[7]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[7]=="B" || $t[7]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[7]=="C" || $t[7]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]==turkce("Ç") || $t[7]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="D" || $t[7]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="E" || $t[7]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="F" || $t[7]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="G" || $t[7]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]==turkce("Ğ") || $t[7]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="H" || $t[7]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]==turkce("I") || $t[7]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]==turkce("İ") || $t[7]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="J" || $t[7]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="K" || $t[7]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="L" || $t[7]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="M" || $t[7]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="N" || $t[7]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="O" || $t[7]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]==turkce("Ö") || $t[7]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="P" || $t[7]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="R" || $t[7]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="S" || $t[7]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]==turkce("Ş") || $t[7]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="T" || $t[7]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="U" || $t[7]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]==turkce("Ü") || $t[7]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="V" || $t[7]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="Y" || $t[7]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[7]=="Z" || $t[7]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+43.5,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }


            if(isset($t[8])) {
              
              if($t[8]=="A" || $t[8]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[8]=="B" || $t[8]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[8]=="C" || $t[8]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]==turkce("Ç") || $t[8]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="D" || $t[8]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="E" || $t[8]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="F" || $t[8]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="G" || $t[8]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]==turkce("Ğ") || $t[8]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="H" || $t[8]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]==turkce("I") || $t[8]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]==turkce("İ") || $t[8]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="J" || $t[8]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="K" || $t[8]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="L" || $t[8]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="M" || $t[8]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="N" || $t[8]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="O" || $t[8]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]==turkce("Ö") || $t[8]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="P" || $t[8]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="R" || $t[8]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="S" || $t[8]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]==turkce("Ş") || $t[8]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="T" || $t[8]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="U" || $t[8]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]==turkce("Ü") || $t[8]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="V" || $t[8]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="Y" || $t[8]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[8]=="Z" || $t[8]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+47.8,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }

            if(isset($t[9])) {
              
              if($t[9]=="A" || $t[9]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[9]=="B" || $t[9]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[9]=="C" || $t[9]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]==turkce("Ç") || $t[9]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="D" || $t[9]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="E" || $t[9]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="F" || $t[9]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="G" || $t[9]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]==turkce("Ğ") || $t[9]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="H" || $t[9]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]==turkce("I") || $t[9]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]==turkce("İ") || $t[9]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="J" || $t[9]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="K" || $t[9]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="L" || $t[9]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="M" || $t[9]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="N" || $t[9]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="O" || $t[9]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]==turkce("Ö") || $t[9]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="P" || $t[9]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="R" || $t[9]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="S" || $t[9]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]==turkce("Ş") || $t[9]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="T" || $t[9]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="U" || $t[9]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]==turkce("Ü") || $t[9]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="V" || $t[9]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="Y" || $t[9]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[9]=="Z" || $t[9]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+52,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }

            if(isset($t[10])) {
              
              if($t[10]=="A" || $t[10]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[10]=="B" || $t[10]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[10]=="C" || $t[10]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]==turkce("Ç") || $t[10]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,176.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="D" || $t[10]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="E" || $t[10]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="F" || $t[10]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="G" || $t[10]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]==turkce("Ğ") || $t[10]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="H" || $t[10]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]==turkce("I") || $t[10]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]==turkce("İ") || $t[10]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="J" || $t[10]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="K" || $t[10]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="L" || $t[10]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="M" || $t[10]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="N" || $t[10]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="O" || $t[10]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]==turkce("Ö") || $t[10]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="P" || $t[10]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="R" || $t[10]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="S" || $t[10]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]==turkce("Ş") || $t[10]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="T" || $t[10]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="U" || $t[10]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]==turkce("Ü") || $t[10]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="V" || $t[10]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="Y" || $t[10]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[10]=="Z" || $t[10]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+56.2,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
            

            
            }

            if(isset($t[11])) {
              
              if($t[11]=="A" || $t[11]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[11]=="B" || $t[11]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[11]=="C" || $t[11]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]==turkce("Ç") || $t[11]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="D" || $t[11]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="E" || $t[11]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="F" || $t[11]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="G" || $t[11]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]==turkce("Ğ") || $t[11]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="H" || $t[11]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]==turkce("I") || $t[11]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]==turkce("İ") || $t[11]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="J" || $t[11]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="K" || $t[11]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="L" || $t[11]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="M" || $t[11]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="N" || $t[11]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="O" || $t[11]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]==turkce("Ö") || $t[11]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="P" || $t[11]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="R" || $t[11]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="S" || $t[11]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]==turkce("Ş") || $t[11]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="T" || $t[11]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="U" || $t[11]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]==turkce("Ü") || $t[11]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="V" || $t[11]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="Y" || $t[11]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[11]=="Z" || $t[11]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+60.5,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }

            if(isset($t[12])) {
              
              if($t[12]=="A" || $t[12]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[12]=="B" || $t[12]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[12]=="C" || $t[12]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]==turkce("Ç") || $t[12]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="D" || $t[12]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="E" || $t[12]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="F" || $t[12]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="G" || $t[12]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]==turkce("Ğ") || $t[12]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="H" || $t[12]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]==turkce("I") || $t[12]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]==turkce("İ") || $t[12]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="J" || $t[12]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="K" || $t[12]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="L" || $t[12]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="M" || $t[12]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="N" || $t[12]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="O" || $t[12]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]==turkce("Ö") || $t[12]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="P" || $t[12]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="R" || $t[12]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="S" || $t[12]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]==turkce("Ş") || $t[12]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="T" || $t[12]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="U" || $t[12]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]==turkce("Ü") || $t[12]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="V" || $t[12]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="Y" || $t[12]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[12]=="Z" || $t[12]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+64.8,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }

            if(isset($t[13])) {
              
              if($t[13]=="A" || $t[13]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[13]=="B" || $t[13]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[13]=="C" || $t[13]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]==turkce("Ç") || $t[13]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="D" || $t[13]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="E" || $t[13]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="F" || $t[13]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="G" || $t[13]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]==turkce("Ğ") || $t[13]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="H" || $t[13]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]==turkce("I") || $t[13]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]==turkce("İ") || $t[13]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="J" || $t[13]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="K" || $t[13]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="L" || $t[13]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="M" || $t[13]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="N" || $t[13]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="O" || $t[13]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]==turkce("Ö") || $t[13]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="P" || $t[13]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="R" || $t[13]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="S" || $t[13]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]==turkce("Ş") || $t[13]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="T" || $t[13]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="U" || $t[13]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]==turkce("Ü") || $t[13]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="V" || $t[13]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="Y" || $t[13]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[13]=="Z" || $t[13]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+69,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }

            if(isset($t[14])) {
              
              if($t[14]=="A" || $t[14]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[14]=="B" || $t[14]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[14]=="C" || $t[14]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]==turkce("Ç") || $t[14]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="D" || $t[14]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="E" || $t[14]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="F" || $t[14]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="G" || $t[14]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]==turkce("Ğ") || $t[14]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="H" || $t[14]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]==turkce("I") || $t[14]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]==turkce("İ") || $t[14]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="J" || $t[14]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="K" || $t[14]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="L" || $t[14]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="M" || $t[14]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="N" || $t[14]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="O" || $t[14]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]==turkce("Ö") || $t[14]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="P" || $t[14]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="R" || $t[14]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="S" || $t[14]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]==turkce("Ş") || $t[14]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="T" || $t[14]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="U" || $t[14]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]==turkce("Ü") || $t[14]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="V" || $t[14]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="Y" || $t[14]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[14]=="Z" || $t[13]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+73.2,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }

            if(isset($t[15])) {
              
              if($t[15]=="A" || $t[15]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[15]=="B" || $t[15]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[15]=="C" || $t[15]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]==turkce("Ç") || $t[15]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="D" || $t[15]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="E" || $t[15]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="F" || $t[15]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="G" || $t[15]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]==turkce("Ğ") || $t[15]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="H" || $t[15]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]==turkce("I") || $t[15]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]==turkce("İ") || $t[15]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="J" || $t[15]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="K" || $t[15]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="L" || $t[15]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="M" || $t[15]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="N" || $t[15]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="O" || $t[15]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]==turkce("Ö") || $t[15]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="P" || $t[15]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="R" || $t[15]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="S" || $t[15]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]==turkce("Ş") || $t[15]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="T" || $t[15]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="U" || $t[15]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]==turkce("Ü") || $t[15]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="V" || $t[15]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="Y" || $t[15]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[15]=="Z" || $t[15]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+77.5,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }

            if(isset($t[16])) {
              
              if($t[16]=="A" || $t[16]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[16]=="B" || $t[16]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[16]=="C" || $t[16]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]==turkce("Ç") || $t[16]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="D" || $t[16]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="E" || $t[16]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="F" || $t[16]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="G" || $t[16]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]==turkce("Ğ") || $t[16]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="H" || $t[16]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]==turkce("I") || $t[16]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]==turkce("İ") || $t[16]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="J" || $t[16]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="K" || $t[16]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="L" || $t[16]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="M" || $t[16]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="N" || $t[16]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="O" || $t[16]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]==turkce("Ö") || $t[16]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="P" || $t[16]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="R" || $t[16]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="S" || $t[16]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]==turkce("Ş") || $t[16]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="T" || $t[16]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="U" || $t[16]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]==turkce("Ü") || $t[16]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="V" || $t[16]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="Y" || $t[16]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[16]=="Z" || $t[16]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+81.7,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }

            if(isset($t[17])) {
              
              if($t[17]=="A" || $t[17]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[17]=="B" || $t[17]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[17]=="C" || $t[17]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[0]==turkce("Ç") || $t[0]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="D" || $t[17]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="E" || $t[17]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="F" || $t[17]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="G" || $t[17]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]==turkce("Ğ") || $t[17]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="H" || $t[17]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]==turkce("I") || $t[17]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]==turkce("İ") || $t[17]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="J" || $t[17]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="K" || $t[17]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="L" || $t[17]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="M" || $t[17]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="N" || $t[17]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="O" || $t[17]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]==turkce("Ö") || $t[17]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="P" || $t[17]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="R" || $t[17]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="S" || $t[17]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]==turkce("Ş") || $t[17]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="T" || $t[17]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="U" || $t[17]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]==turkce("Ü") || $t[17]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="V" || $t[17]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="Y" || $t[17]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[17]=="Z" || $t[17]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+86,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }

            if(isset($t[18])) {
              
              if($t[18]=="A" || $t[18]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[18]=="B" || $t[18]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[18]=="C" || $t[18]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]==turkce("Ç") || $t[18]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="D" || $t[18]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="E" || $t[18]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="F" || $t[18]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="G" || $t[18]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]==turkce("Ğ") || $t[18]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="H" || $t[18]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]==turkce("I") || $t[18]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]==turkce("İ") || $t[18]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="J" || $t[18]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="K" || $t[18]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="L" || $t[18]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="M" || $t[18]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="N" || $t[18]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="O" || $t[18]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]==turkce("Ö") || $t[18]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="P" || $t[18]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="R" || $t[18]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="S" || $t[18]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]==turkce("Ş") || $t[18]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="T" || $t[18]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="U" || $t[18]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]==turkce("Ü") || $t[18]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="V" || $t[18]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="Y" || $t[18]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[18]=="Z" || $t[18]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+90.2,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }

            if(isset($t[19])) {
              
              if($t[19]=="A" || $t[19]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[19]=="B" || $t[19]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[19]=="C" || $t[19]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]==turkce("Ç") || $t[19]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="D" || $t[19]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="E" || $t[19]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="F" || $t[19]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="G" || $t[19]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]==turkce("Ğ") || $t[19]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="H" || $t[19]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]==turkce("I") || $t[19]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]==turkce("İ") || $t[19]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="J" || $t[19]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="K" || $t[19]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="L" || $t[19]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="M" || $t[19]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="N" || $t[19]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="O" || $t[19]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]==turkce("Ö") || $t[19]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="P" || $t[19]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="R" || $t[19]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="S" || $t[19]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]==turkce("Ş") || $t[19]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="T" || $t[19]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="U" || $t[19]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]==turkce("Ü") || $t[19]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="V" || $t[19]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="Y" || $t[19]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[19]=="Z" || $t[19]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+94.4,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }

            if(isset($t[20])) {
              
              if($t[20]=="A" || $t[20]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[20]=="B" || $t[20]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[20]=="C" || $t[20]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]==turkce("Ç") || $t[20]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="D" || $t[20]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="E" || $t[20]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="F" || $t[20]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="G" || $t[20]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]==turkce("Ğ") || $t[20]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="H" || $t[20]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]==turkce("I") || $t[20]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]==turkce("İ") || $t[20]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="J" || $t[20]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="K" || $t[20]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="L" || $t[20]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="M" || $t[20]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="N" || $t[20]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="O" || $t[20]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]==turkce("Ö") || $t[20]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="P" || $t[20]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="R" || $t[20]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="S" || $t[20]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]==turkce("Ş") || $t[20]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="T" || $t[20]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="U" || $t[20]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]==turkce("Ü") || $t[20]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="V" || $t[20]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="Y" || $t[20]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[20]=="Z" || $t[20]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+98.6,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }

            if(isset($t[21])) {
              
              if($t[21]=="A" || $t[21]=="a") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,162.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[21]=="B" || $t[21]=="b") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,166.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              else if($t[21]=="C" || $t[21]=="c") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,171.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]==turkce("Ç") || $t[21]==turkce("ç")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,175.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="D" || $t[21]=="d") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,179.8+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="E" || $t[21]=="e") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,184+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="F" || $t[21]=="f") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,188.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="G" || $t[21]=="g") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,192.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]==turkce("Ğ") || $t[21]==turkce("ğ")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,196.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="H" || $t[21]=="h") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,200.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]==turkce("I") || $t[21]==turkce("ı")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,205+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]==turkce("İ") || $t[21]==turkce("i")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,209.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="J" || $t[21]=="j") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,213.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="K" || $t[21]=="k") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,217.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="L" || $t[21]=="l") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,222+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="M" || $t[21]=="m") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,226.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="N" || $t[21]=="n") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,230.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="O" || $t[21]=="o") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,234.9+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]==turkce("Ö") || $t[21]==turkce("ö")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,239.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="P" || $t[21]=="p") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,243.2+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="R" || $t[21]=="r") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,247.4+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="S" || $t[21]=="s") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,251.7+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]==turkce("Ş") || $t[21]==turkce("ş")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,256+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="T" || $t[21]=="t") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,260.3+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="U" || $t[21]=="u") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,264.6+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]==turkce("Ü") || $t[21]==turkce("ü")) {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,269.1+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="V" || $t[21]=="v") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,273+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="Y" || $t[21]=="y") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,277+$_GET["y"]-$_GET['t'],3,3, "PNG");

              } else if($t[21]=="Z" || $t[21]=="z") {
                $pdf->Image('img/14.png',$_GET["x"]-$_GET['z']+102.8,281.5+$_GET["y"]-$_GET['t'],3,3, "PNG");

              }
              
                    
            }



  
           }
       

         
        }
        else
        {
            echo "Not found record";
        }

 

    




  $pdf->Output();


?>


