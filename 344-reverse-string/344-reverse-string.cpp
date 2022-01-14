class Solution {
public:
    void reverseString(vector<char>& s) {
        
        myReverse(s);
        
        
        //reverse(s.begin(),s.end());
        
    }
    
     //lets build reverse by ourself
    void myReverse(vector<char>& s)
    {
        int start = 0;
        int end = s.size()-1;
        
        for (;start<end;)
        {
            swap(s[start],s[end]);
            start++ ;
            end--;
        }
    }
};