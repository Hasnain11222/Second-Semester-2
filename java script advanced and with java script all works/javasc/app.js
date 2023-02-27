// var name="hasnain";
// var semester="adse";
// var eng=75;
// var urdu=88;
// var math=70;
// var cs= 66;
// var isl=76;
// var obtain=eng+urdu+math+cs+isl


// var percentage=obtain/500*100


// console.log(name)
// console.log(semester)
// console.log(eng)
// console.log(urdu)
// console.log(math)
// console.log(cs)
// console.log(isl)
// console.log(obtain)
// console.log(percentage)

var data =  {

    "name":"hasnain",
    "semester": "adse",
    "eng": 75,
    "urdu": 89,
    "Math": 66,
    "cs":75,
    "isl":70,
    

}

var obtain = data.Math + data.cs + data.eng + data.urdu + data.isl 
var percentage = obtain/500*100

console.log(data.name);
console.log(data.semester);
console.log(data.eng);
console.log(data.urdu);
console.log(data.Math);
console.log(data.cs);
console.log(data.isl);
console.log(obtain);
console.log(percentage);