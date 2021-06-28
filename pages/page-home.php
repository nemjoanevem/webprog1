
    
    <div class="container">
        <main>
        <h2>Bemutatkozás</h2>
        <p class="intro">Duis a ipsum fermentum, pellentesque ligula sed, euismod ante. Duis vitae diam sem. Fusce ligula dui, faucibus eu augue quis, elementum porta lectus. Etiam aliquet molestie magna quis finibus. Nam at lacinia augue. Integer porttitor nunc vitae suscipit gravida. Nulla nec condimentum diam, nec malesuada odio. Sed vitae ex vitae turpis vehicula efficitur. Phasellus ac nisi id velit dictum tempor. Phasellus quis laoreet ligula. Pellentesque eu elementum purus, quis dignissim turpis. Donec congue pretium sollicitudin. Donec quis risus quam. Vestibulum orci mauris, vehicula at lobortis sed, mollis vel arcu.</p>
        
        <img src="res/ElegantColdHorsefly-small.gif">    
        
        <p>Aliquam tristique pretium nisl et accumsan. Vivamus efficitur eleifend finibus. Ut suscipit luctus mollis. Mauris porta at lorem nec aliquam. Aenean ut lacinia nunc. Nam quis maximus enim, non ullamcorper dui. Maecenas cursus quam dignissim eros viverra mattis. Sed pellentesque, nibh in varius feugiat, risus velit pretium enim, vel malesuada urna lacus ut justo. Proin massa dolor, mattis sed dictum eget, pretium vitae sapien. Morbi eu nunc nec ipsum pulvinar lobortis.
        </p>
        <a href="">Tovább</a>
            

            
            
<?php
            
$why = array(
    "Mert sok a sör",
    "Mert olcsó a sör",
    "Mert nem drága a sör",
    "Mert akkor is van sör, ha véletlen nem lenne",
    "Mert ha véletlen nincs sör, sör akkor is van"
);

echo '<section>
        <h3>Miért érdemes minket választani?</h3>
        <ul>';
            
            
for($i = 0; $i < count($why); $i++)
{
    echo '<li>'. $why[$i] .'</li>';
}
echo '</ul>
</section>';
            

?>
            


        
           
    </main>
    
<aside>
<?php
date_default_timezone_set("Europe/Budapest");
            
$open = 8;
$close = 16;
$now = date("H");
            
$message = "Ügyfélszolgálatunk jelenleg elérhető";
            
if($now < $open)
{
    $next = $open - $now;;
    $message = "Ügyfélszolgálatunk még zárva tart, ". $next ." óra múlva léphet ismét kapcsolatba velünk.";
}
else
if($now >= $close)
{
    $next = (24 - $now) + $open;
    $message = "Ügyfélszolgálatunk a mai napon már nem elérhető, ". $next ." óra múlva léphet ismét kapcsolatba velünk";
}
                
            
echo '<section>
        <h3>Egyéb info</h3>
        <p>Telefonszám: 1234 54</p>
        <p>Nyitva tartás: '. $open .'-'. $close .' óra</p>
        <p>'. $message .'</p>
        
      </section>';
?>
            <section>
            <h3>Egyéb info</h3>
            <p>Nam ut felis sed quam euismod condimentum. Ut ornare varius felis aliquam vulputate. Nunc id massa id eros hendrerit aliquam in ut purus. Aliquam aliquet tellus id egestas interdum. Etiam facilisis ligula ac laoreet sagittis.</p>
        </section>
        
        <section>
            <h3>Ajánlat</h3>
            <p>Pellentesque ornare tincidunt dignissim. Proin a ante sit amet justo bibendum condimentum eu eu odio. Fusce convallis vestibulum ultrices.</p>
            <a href="">Megtekintem</a>
        </section>
        
    </aside>   
    </div>

