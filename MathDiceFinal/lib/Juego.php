 <?php
class Juego{
    
    function dado($start, $total){
        $random = rand($start, $total); 
        return $random;
    }
    
}
?>