
var rotate = function (a, k) {
    for (let i = a.length - 1; i >= 0; i--) {
      a[i + k] = a[i];
    }
    console.log(a);
    for (let j = k - 1; j >= 0; j--) {
      a[j] = a.pop();
      console.log(a);
    }
    //console.log(a);
  };
let a = [1,2,3],k = 4;
console.log(rotate(a,k));