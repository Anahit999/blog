let z= 8.437;
let z1=z.toFixed(2);
console.log(z1);//1in xndir
let fruit=["Banaan", "Orange", "Apple", "Mango"]
let fruit1 = fruit.push("kiwi");
console.log(fruit);//12rd xndir
let text = "Bye John";
let result = text.toUpperCase();
console.log(result)//5rd xndir
let b="Good bye";
console.log(b);
console.log(b.replace(/ /g,"_"));//7rd xndir
let d="imagination";
let part = d.slice(0.3);
let part1 = d.slice(-3);
console.log(part + part1);//8rd xndir-------
let c="  tomorrow is my birthday  ";
let c1 = c.trimStart();
let c2 = c.trimEnd();
console.log(c1);
console.log(c2);//9rd xndir
let word = "collaboration";
let word1= word.length;
console.log(word1);//10rd xndir
let x=135;
let y=x.toString(2);
let y1=y.length;
console.log(y1);//3rd xndir
let e= 7.88;
let e1= parseInt(e);
console.log(e1);//4rd xndir
let f= "14";
if( typeof f == "number"){
    console.log("f is a number")
}else{
    console.log("f is no number")
}//2rd xndir
let fruits=["pear", "chery", "strawberry"];
let fruits1=fruits.pop();
console.log(fruits);//12rd xndir
const ages =[3, 5, 6.7, 18,3,57]
let ages1= ages.findIndex(checkAge);
function checkAge(age){
    return age > 10;
}
console.log(ages1);//13rd xndir
const q=[ 3,4,13,11,26,8];
let q1= q.filter(check);
function check(u){
    return u%2===0
}
function check(u){
}
console.log(q1);//14rd xndir-------
const myArr=[1, 2, 3, 4, 5, 6];
const newArr = myArr.flatMap(x => [x, x * 2]);
console.log(newArr);//15rd xndir
const city=["ijevan", "yerevan", "london", "paris"];
let city1=city.includes("yerevan");
console.log(city1);//17rd xndir
const j=["monrolia", "china", "japan", "south korea"];
let j1=j.join(" and ");
console.log(j1);//18rd xndir
const B=[ "banana", "lemon", "orange", "watermalon", "melon"];
let B1=B.slice(1.3);
console.log(B1);//19rd xndir+-+-+-+-
const point=[5,1,128,56,49,86,68];
point.sort(function(a, b){
    return a-b
});
console.log(point);//20rd xndir
const person={
    fullName: "Anahit",
    lastName: "Yolchyan",
    herAge: "18",
    eyeColor: "brown"
}
let keys= Object.keys(person);
console.log(keys);//21rd xndir
let values=Object.values(person);
console.log(values);//22rd xndir
let entries=Object.entries(person)
console.log(entries);//25rd xndir+-+-+-+-
const obj= {a: 1, b: 3}
console.log('a'in obj);
console.log('c' in obj);
console.log('b' in obj);//23rd xndir
