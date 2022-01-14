/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
        
        $size = 1;
        $midNode = $head ;
        
        while($head->next !=null)
        {
            $size++ ;
            $head = $head->next ;
        }
        $size++;
        $mid =($size/2) ;
        
        for ($i=0;$i<$mid-1;$i++)
        {
            $midNode=$midNode->next ;
        }
        return $midNode ;
    }
}