class Solution {
public:
    void rotate(vector<int>& nums, int k) {
        
        vector<int>result ;
        
        k = k%nums.size();
        
        int mid = nums.size()-k;
        
        if(mid<0)return ;
        
    
            for (int i=nums.size()-k;i<nums.size();i++)
        {   
        
            result.push_back(nums[i]);
        }
        
        for (int j=0; j<nums.size()-k; j++)
        {   
        
            result.push_back(nums[j]);
        }
        nums = result ;
        
        
    }
};