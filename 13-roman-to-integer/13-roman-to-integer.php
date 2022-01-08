class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $sum=0;
        $mapArray = $this->getRomanEquivalentNumber();
        $dualMapArray = $this->getRomanValue();
        $s = str_split($s);
        
        for ($i=0;$i<count($s);$i++)
        {   
            if(isset($s[$i+1]))
            {   
                $index = $s[$i] . $s[$i+1] ;
            
                if($dualMapArray[$index])
                {   
                    $sum +=$dualMapArray[$index] ;
                    $i++;
                    continue ;
                }
            }
            $sum +=$mapArray[$s[$i]];
        }
        return $sum;
    }
    
    function getRomanEquivalentNumber()
    {
        return array(
            'I'=>1,
            'V'=>5,
            'X'=>10,
            'L'=>50,
            'C'=>100,
            'D'=>500,
            'M'=>1000
        );
    }
    function getRomanValue()
    {
        return array(
            'IV' =>4,
            'IX'=>9,
            'XL'=>40,
            'XC'=>90,
            'CD'=>400,
            'CM'=>900
        );
    }
}