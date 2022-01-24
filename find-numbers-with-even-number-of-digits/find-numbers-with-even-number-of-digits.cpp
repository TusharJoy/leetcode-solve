class Solution {
public:
    int findNumbers(vector<int>& nums) {
        
        int result =0;
        for(int i=0;i<nums.size();i++)
        {
            if(this->countDigit(nums[i]))
            {
                result++;
            }
        }
        return result;
    }
    
    int countDigit(int value)
    {
        int count = 0;
        while(value!=0)
        {
            count++;
            value /=10;
        }
        if(count%2==0) return 1 ;
        return 0;
    }
};