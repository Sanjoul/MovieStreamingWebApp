<?php
class Recommend {
    public function similarityDistance($preferences, $vid1, $vid2)
    {
        try{
        $xy = 0;
        $a = 0;
        $b = 0;
    
        foreach($preferences[$vid2] as $key=>$value)
        {
            $a += $preferences[$vid2][$key] * $preferences[$vid2][$key];
        }

        foreach($preferences[$vid1] as $key=>$value)
        {
            $b += $preferences[$vid1][$key] * $preferences[$vid1][$key];
            if(array_key_exists($key, $preferences[$vid2])) {
                $xy += $preferences[$vid2][$key] * $preferences[$vid2][$key];
            }
        }
        
        if($a === 0 || $b === 0)
            return 0;
        else
            return  $xy / (sqrt($a) * sqrt($b));     
    }catch (Exception $e){
        echo "message:" .$e->getMessage();
    }
    }
}
?>