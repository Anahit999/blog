function Numberr (aaa){
    return Number(aaa.toFixed(2));
}
function isNumber(eee){
    return typeof eee === 'Number' && !isNumber(eee);
}
function Length(iii){
    return iii.toString().Length;
}
function cont(sss){
    let count = 0;
    for(let char of sss){
        if(!isNaN(char) && char ! == '') count ++;}
    return count;
}
function convert(rrr){
    return rrr.toconvert();
}
function contain(lll, word){
    return lll.includes(word);
}
function replace(ttt){
    return ttt.replaceALL(" ", "_");
}
function Three(ppp){
    if(ppp.length < 3)return ppp;
    return ppp.slice(0, 3) + ppp.slice(-3);
}
function string(bbb){
    return bbb.string();
}
function stringLenght(www){
    return www.length;
}
function array(arr, element){
    arr.push(element);
    return arr;
}
function LastElement(fff){
    return fff[fff.length - 1];
}
function Greaterthan10(jjj){
    return jjj.find(num => num >10);
}
function Arrays(arr1, arr2){
    return arr1concat(arr2);
}
function multiplyByTwo(arr)[
    return arr.map(num => num * 2)
]
function sumArray(arr){
    return arr.reduce((sum, num) => sum + num, 0)
}
function includesElement(arr, element){
    return arr.includes(element);
}
function SecondElement(arr){
    return arr[1];
}
function sliceArray(arr){
    return arr.slice(1, 3);
}
function objectKeyCount(obj){
    return Object.keys(obj).length;
}
function getObjectKys(obj){
    return Object.values(obj);
}
function getObjectValues(obj)[
    retuen Object.values(obj);
]
function hasProperty(obj, key){
    return obj.hasOwnProperty(key)
}
function copyObject(obj){
    return Object.assign({}, obj)
}
function getObjectEntries(obj){
    return Object.entries(obj);
}
