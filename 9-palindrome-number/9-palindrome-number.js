/**
 * @param {number} x
 * @return {boolean}
 */
var isPalindrome = function(x) {
    if(x<0) return 0;
    var data = x.toString();
    
    for(let i = 0;i< data.length; i++)
    {
        let j = data.length -1-i ;
        if(data[i]!=data[j]) return 0
    }
    return 1;
};