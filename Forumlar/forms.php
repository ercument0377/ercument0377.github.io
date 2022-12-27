<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Formlar </title>
       
    </head>
    <?php
         if(empty($_POST['temaRengi'])==false)
         {
            $arkaplanRengi =$_POST['temaRengi'];
         }
    ?>
    <body style="font-style:italic; background-color:<?php echo $arkaplanRengi; ?>;">
        <p>
            <?php
                if(empty($_POST['kullaniciAdi'])==false)
                {
                    echo $_POST['kullaniciAdi']. "  Hosgeldiniz!";
                }
                else
                {
                    echo "Kullanici adi bos olamaz!";
                }
            ?>
        </p>
        <p>
            <?php
                   
                if(empty($_POST['telNo'])==false)
                {
                    if($_POST['telNo'][0]!="5")
                    {
                        echo "Telefon numaraniz 5 ile baslamalidir.";
                    }
                    else if(strlen($_POST['telNo'])!=10)
                    {
                        echo "Telefon numaraniz 10 hane olmalidir.";
                    }
                    else
                    {
                        $tumKarakterlerSayiMi = true;
                        for($i=0; $i<strlen($_POST['telNo']);$i++)
                        {
                            if(!(is_numeric($_POST['telNo'][$i]))){
                                $tumKarakterlerSayiMi =false;
                                break;
                            }
                        }
                        if($tumKarakterlerSayiMi)
                        {
                            echo "Telefon numaraniz kaydedilmistir.";
                        }
                        else
                        {
                            echo "Telefon numaraniz sadece sayilardan olusmalidir.";
                        }
                    }
                   

                }
                else
                {
                    echo "Telefon numarasi bos olamaz!";
                }


            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['Sifre'])==false)
                {
                    if(strlen($_POST['Sifre'])>=8)
                        echo "Sifreniz kaydedilmistir.";
                    else
                        echo "Sifreniz en az 8 karakter icermelidir";
                   
                }
                else
                {
                    echo "Sifre bos olamaz!";
                }
            ?>
        </p>
        <p>
           
            <?php
                if(empty($_POST['Eposta'])==false)
                {
                    if(is_bool($atKonumu = strpos($_POST['Eposta'],"@")))
                    {
                        echo "Eposta @ karakteri icermelidir";
                    }
                    else
                    {
                        $attenSonrasi = substr($_POST['Eposta'],$atKonumu);
                        $noktaVarMi = str_contains($attenSonrasi,".");
                        if($noktaVarMi)
                        {
                            echo "Epostaniz kaydedilmistir";
                        }
                        else
                        {
                            echo "Eposta . karakteri icermelidir";
                        }
                    }
                   
                }
                else
                {
                    echo "Eposta bos olamaz!";
                }
            ?>
        </p>
        <p>
           
            <?php
                if(empty($_POST['dogumTarihi'])==false)
                {
                    echo "Dogum Tarihiniz kaydedilmistir";
   
                }
                else
                {
                    echo "Dogum Tarihiniz  bos olamaz!";
                }
            ?>
        </p>
        <p>
           
            <?php
               
                if(empty($_POST['Sehir'])==false)
                {
                    $cizgiKonumu = strpos($_POST['Sehir'],"-")+1;
                    $sehirAdi = substr($_POST['Sehir'],$cizgiKonumu);
                    echo "$sehirAdi 'li hemsehrim hosgeldin.";
 
                }
                else
                {
                    echo "Memleket bos olamaz!";
                }
            ?>
        </p>

        <p>  
           <?php
               echo "Hobi olarak: ";
               if(empty($_POST['hobiler'])==false)
               {
                   for($i=0;$i<sizeof($_POST['hobiler']);$i++)
                   {
                        echo $_POST['hobiler'][$i].", ";
                   }
                   echo "<br>";
               }
               else
               {
                   echo "Hobiler bos olamaz!";
               }
           ?>
       </p>

       <p>  
           <?php
               if(empty($_POST['saatler'])==false)
               {
                     echo "Spor salonumuzu saat ";
                   switch($_POST['saatler'])
                   {
                        case "11-15":
                            echo "11.00-15.00";
                            break;
                        case "15-19":
                            echo "15.00-19.00";
                            break;
                        case "19-23":
                            echo "19.00-23.00 ";
                            break;
                        case "23-03":
                            echo "23.00-03.00";
                            break;
                        default:
                            echo "Bir hata olustu";
                   }
                   echo " arasi kullanabilirsiniz! <br>";
               }
               else
               {
                   echo "Hobiler bos olamaz!";
               }
           ?>
       </p>

    </body>
</html>