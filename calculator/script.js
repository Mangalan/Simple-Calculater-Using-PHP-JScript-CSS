var num1=0;
var num2=0;
var sam=10;
var flag=0;
var symbol;
var total;

function getNumber(num){
    if(flag==0){
        this.num1 = this.num1*10 + num;
        console.log(num1);
        document.getElementById("display-number").innerHTML = this.num1.toString();
        console.log(flag);
    }
    else{
        this.num2=this.num2*10 + num;
        console.log(num2);
        console.log(this.flag);
        document.getElementById("display-number").innerHTML = this.num2.toString();
    }
}

function getSymbol(sym){
    this.symbol = sym;
    this.flag =1;
    console.log(symbol);
    document.getElementById("display-number").innerHTML = this.symbol;
}

function refresh(){
    this.flag=0;
    this.num1 = 0;
    this.num2 = 0;
    console.log(this.flag);
    document.getElementById("display-number").innerHTML = "0";
}

function output(){
    switch(this.symbol){
        case "+":
            this.total = this.num1 + this.num2;
            break;
        case "-":
            this.total = this.num1 - this.num2;
            break;
        case "*":
            this.total = this.num1 * this.num2;
            break;
        case "/":
            this.total = this.num1 / this.num2;
            break;
    }
    console.log(this.total); 
    document.getElementById("display-number").innerHTML = this.total.toString();
    window.location.href="result.php?answer="+this.total+"&num1="+this.num1+"&num2="+this.num2+"&symbol="+this.symbol;
}
