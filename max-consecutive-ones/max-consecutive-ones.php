class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        
        $maxOne = 0;
        $tmpOne =0 ;
        foreach($nums as $index=>$value)
        {   
            if($value==1)
            {
                $tmpOne++;
            }
            if($value==0)
            {
                $tmpOne =0;
            }
            if($tmpOne>$maxOne )
            {
                $maxOne = $tmpOne ;
            }
        }
        return $maxOne ;
    }
}