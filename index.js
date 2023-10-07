


var canJump = function(a) { 
   let n = a.length ;
   let mx = 0;
   for(let i = 0 ; i < n ; i++){
     mx = Math.max(mx,a[i]+i);

    if(mx >= n-1){
        return true ;
    }
    if(mx <= i && a[i] == 0) return false ;
}
    
};
let a = [0,1];
console.log(canJump(a));