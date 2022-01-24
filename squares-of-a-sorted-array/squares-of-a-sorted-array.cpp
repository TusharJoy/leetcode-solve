class Solution {
public:
    vector<int> sortedSquares(vector<int>& nums) {
        
        vector<int>result ;
        
        int i=0;int j=nums.size()-1;
        
        for(;i<=j;)
        {   
            if(abs(nums[i])<= abs(nums[j]) )
               {
                    result.push_back( nums[j]*nums[j]);
                    j-- ;
               }
            
            else
               {
                    result.push_back( nums[i]*nums[i]);
                    i++ ;
               }
               
        }
        reverse(result.begin(),result.end()) ;
        return result ;
    }
};