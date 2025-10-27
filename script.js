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
