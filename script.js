let callback = (no, sum) => {
    console.log("im the sum: " + sum)
}

console.log('hello');
async function first(no, callback) {
    console.log('hello im inside first func')
    setTimeout(() => {
        let sum = no + 3;
        callback(no, sum)
        console.log("im inside the setimeout")
    }, 9000)

}
async function aw2(){

    console.log("await se phle")
    let aw = await first(3,callback);
    console.log('await k bad')
}
aw2()

let  a= fetch('https://www.google.com')
console.log(a)

fetch('https://jsonplaceholder.typicode.com/todos/1')
      .then((response) => response.json())
      .then(json => console.log(json))