function convert(event){
    event.preventDefault(); //stop the form from submitting, so number will display

    //get selected currency
    var currency=document.getElementById('money').value;
    var amount=document.getElementById('amnt').value;
    var exchangedAmnt="";

    //makesure its filled out
    if(amount===""){
        alert("Please Enter an Amount.");
        exit();
    }

    //exchange math
    if(currency==="CAD"){
        exchangedAmnt=amount*.74;
    }else if(currency==="AUD"){
        exchangedAmnt=amount*.66;
    }else if(currency==="¥"){
        exchangedAmnt=amount*.0069;
    }else if(currency==="€"){
        exchangedAmnt=amount*1.08;
    }else if(currency==="£"){
        exchangedAmnt=amount*1.25;
    }else if(currency==="₱"){
        exchangedAmnt=amount*.058;
    }
    //format

        //result
    const formatter = new Intl.NumberFormat('en-US', {style: 'currency',currency: 'USD'});
    const formattedNumber = formatter.format(exchangedAmnt);

        //input
    amount = formatter.format(amount);

    //display
    var moneyDisplay=document.getElementById('resHolder');
    moneyDisplay.innerHTML= amount+" in "+currency+" is equal to approximatley "+formattedNumber+" USD";

}