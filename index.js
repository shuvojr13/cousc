
let a = [5,-3,5]
var maxSubarraySumCircular = function(a) {
    let n =  a.length 
    let currMax = a[0], maxSum = a[0], totalSum = 0;

    for(let i = 1 ; i < n ; i++){
        currMax = Math.max(a[i],currMax + a[i]);
        maxSum =  Math.max(maxSum,currMax);
        totalSum += a[i];
    }
    console.log(maxSum);
    if(totalSum == maxSum) return maxSum ;
    else return Math.max(maxSum , totalSum - maxSum);


};

console.log(maxSubarraySumCircular(a));