<!-- Má implementação -->
<?php
if(isset($_POST['buscar'])){
   $banda = $_POST['banda'];
   switch($banda){
      case 'metallica':
      case 'METALLICA':
      case 'Metallica':
         header("location:html/busca/metbusca.html");
         break;
      case 'acdc':
      case 'ACDC':
      case 'AC/DC':
         header("location:html/busca/acdbusca.html");
         break;
      case 'slayer':
      case 'SLAYER':
      case 'Slayer':
         header("location:html/busca/slaybusca.html");
         break;
      case 'anthrax':
      case 'ANTTHRAX':
      case 'Anthrax':
         header("location:html/busca/antbusca.html");
         break;
      case 'arctic monkeys':
      case 'ARCTIC MONKEYS':
      case 'Arctic Monkeys':
         header("location:html/busca/arcbusca.html");
         break;
      case 'the beatles':
      case 'THE BEATLES':
      case 'The Beatles':
         header("location:html/busca/beatlebusca.html");
         break;
      case 'black sabbath':
      case 'BLACK SABBATH':
      case 'Black Sabbath':
         header("location:html/busca/blackbusca.html");
         break;
      case 'coldplay':
      case 'COLDPLAY':
      case 'Coldplay':
         header("location:html/busca/coldbusca.html");
         break;
      case 'dream theater':
      case 'DREAM THEATER':
      case 'Dream Theater':
         header("location:html/busca/dreambusca.html");
         break;
      case 'green day':
      case 'GREEN DAY':
      case 'Green Day':
         header("location:html/busca/greenbusca.html");
         break;
      case 'iron maiden':
      case 'IRON MAIDEN':
      case 'Iron Maiden':
         header("location:html/busca/ironbusca.html");
         break;
      case 'kiss':
      case 'KISS':
      case 'Kiss':
         header("location:html/busca/kissbusca.html");
         break;
      case 'megadeth':
      case 'MEGADETH':
      case 'Megadeth':
         header("location:html/busca/megbusca.html");
         break;
      case 'motorhead':
      case 'MOTORHEAD':
      case 'Motorhead':
         header("location:html/busca/motorbusca.html");
         break;
      case 'queen':
      case 'QUEEN':
      case 'Queen':
         header("location:html/busca/queenbusca.html");
         break;
      case 'scorpions':
      case 'SCORPIONS':
      case 'Scorpions':
         header("location:html/busca/scorbusca.html");
         break;
      case 'system of a down':
      case 'SYSTEM OF A DOWN':
      case 'System of a Down':
         header("location:html/busca/sysbusca.html");
         break;
      case 'van halen':
      case 'VAN HALEN':
      case 'Van Halen':
         header("location:html/busca/vanbusca.html");
         break;
      default:
         header("location:html/busca/nenhumbusca.html");
  } 
}
?>
