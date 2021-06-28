
    
    <div class="container">
        <main>
        <h2>Szolgáltatások</h2>
          
        
        <p>Aliquam tristique pretium nisl et accumsan. Vivamus efficitur eleifend finibus. Ut suscipit luctus mollis. Mauris porta at lorem nec aliquam. Aenean ut lacinia nunc. Nam quis maximus enim, non ullamcorper dui. Maecenas cursus quam dignissim eros viverra mattis.
        </p>
        
        <table>
            <thead>
                <tr>
                    <th>Ssz.</th>
                    <th>Megjegyzés</th>
                    <th>Leírás</th>
                    <th>Egységár</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
<?php
        
$szolgaltatasok = file("data/szolgaltatasok.txt");
                
$x = 1;
                
foreach($szolgaltatasok as $szolgaltatas)   {
    $szolgaltatas = trim($szolgaltatas); //-> leszedi a whitespace-t meg iylesmi
    $record = explode(";", $szolgaltatas);
    
    $title = $record[0];
    $desc = $record[1];
    $price = $record[2];
    
   echo ' <tr>
        <td>'. $x .'</td>
        <td>'. $title .'</td>
        <td>'. $desc .'</td>
        <td>'. $price .' HUF</td>
        <td><a href="">Igénylés</a></td>
    </tr>';
    
    $x++;
}
?>
            </tbody>
        </table>
           
    </main>
    
        <aside>
        
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
