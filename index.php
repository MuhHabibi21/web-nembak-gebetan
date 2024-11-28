<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/1280px-YouTube_full-color_icon_%282017%29.svg.png" type="image/svg+xml" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" /> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <title>For (nama gebetanmu) /title> <?php date_default_timezone_set("Asia/Jakarta"); if(isset($_GET['jawaban'])){$fp = fopen('dekatutorial.txt', 'r'); echo '<link rel="stylesheet" href="https://dekatutorial.github.io/18nembak/tampil.css" /></head><body><div class="top">Jawaban Script   <br />Deka Tutorial</div><div class="content">';while(!feof($fp)){echo "".fgets($fp)."<br>";} echo '</div></body></html>';die;fclose($fp);} if(isset($_POST['submit'])){ $date = date("d-M-Y (H:i)");$status = $_POST["Status"];$pesan = $_POST["Pesan"]; $fp = fopen('dekatutorial.txt', 'a'); fwrite($fp,$date."\nStatus :\n<strong>".$status."\n</strong> Pesan :\n<strong>".$pesan."</strong>\n\n"); fclose($fp);index(); } function index(){ $link = "";if(isset($_GET["link"])){$link = $_GET["link"];}echo '<link rel="stylesheet" href="https://dekatutorial.github.io/18nembak/page2.css" /></head><body><script src="page2.js"></script><script>timeku("'.$link.'");</script></body></html>';die;} ?> <script>var musik = ""; var backgound = ""; var gambarStiker1 = ""; var gambarStiker2 = ""; var gambarStiker3 = "";</script> <script src="sweetalert2.all.min.js"></script> <link rel="stylesheet" href="https://dekatutorial.github.io/18nembak/style.css" />
  </head> <body> <script> popupku(); </script> <div class="preload"> <p>sabar yaa (nama gebetanmu) cantikk, Loading dulu . . .</p> </div> <div class="open"> <div> <div class="lope" onclick="ilang()"><i class="love material-icons-sharp"> favorite </i></div> <h3>Pencet Love nya yaa (nama gebetanmu) cantikk</h3> </div> </div> <div class="bg"></div> <div class="lopeBg"></div>
    <div class="top stiker"><img src="" /><img src="" /><img src="" /></div><div class="ucapan">
      <div id="slider">
    <!-- Ucapan awal -->
        <p>isi pesan sesukamu</p>
        <p>isi pesan sesukamu</p>
        <p>isi pesan sesukamu</p>
    
    <!-- Pertanyaan -->
        <p>do you want to be my girlfriend?......             coba pencet "no" kalo bisa awokawokawok</p>
      </div><div id="slider">
    <!-- Ucapan diterima -->
        <p>thankyou so much</p>
      </div>
    </div>
    <script>

      // PENTING : jika ekstensi file berbeda silahkan ganti di bawah ini
      musik = "abty.mp3";
      background = "hugaboy.jpg";
      gambarStiker1 = "ww.jpg";
      gambarStiker2 = "bocil.jpg";
      gambarStiker3 = "wily.jpg";

    </script>
    <div class="button">
      <div>
        <button>Back</button>
        <button>Next</button>
      </div>
      <div>
        <button>No </button>
        <button>Yes</button>
      </div>
      <div>
        <button>Kirim Pesan buat (namamu ) yang tampan ini</button>
      </div>
    </div>
    <div class="container-pesan" style="display: none"> <div class="kirim-pesan"> <p>Kirim Pesan kamu setelah buka ini</p> <form method="post"> <input name="Status" hidden class="jawaban" type="text" value="" /> <textarea required name="Pesan" id="" cols="30" rows="10" placeholder="Tulis pesan..."></textarea> <button type="submit" name="submit">Kirim</button> </form> </div> </div> <script src="script.js"></script>
  </body>
</html>
