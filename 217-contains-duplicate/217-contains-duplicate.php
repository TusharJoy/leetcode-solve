class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        
        $dp =array();
        foreach($nums as $value)
        {
            $dp[$value]=0;
        }
        
        foreach($nums as $value){
            $dp[$value]++ ;
        }
        
        foreach($dp as $value)
        {
            if($value>1) return true ;
        }
        
        return false ;
    }
}