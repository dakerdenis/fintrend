var d = document,
    //calculatorBox 	= d.getElementById('calculator'),
    propertyPrice 	= d.getElementById('property-price'),
    loanAmount 			= d.getElementById('loan-amount'),
    numberOfMonths 	= d.getElementById('number-of-months');

var 
    innerLa 	= d.getElementById('inner-la'),
    innerNom 	= d.getElementById('inner-nom');

//go function
ChangeValue();

propertyPrice.oninput 	= ChangeValue;
loanAmount.oninput 			= ChangeValue;
numberOfMonths.oninput 	= ChangeValue;

//ie
propertyPrice.onpropertychange 	= ChangeValue;
loanAmount.onpropertychange 		= ChangeValue;
numberOfMonths.onpropertychange = ChangeValue;

propertyPrice.onchange 	= ChangeValue;
loanAmount.onchange 		= ChangeValue;
numberOfMonths.onchange = ChangeValue;

// function
function ChangeValue() {
  var pp 	= propertyPrice.value,
      la 	= loanAmount.value,
    	nom = numberOfMonths.value;
   // inner sub
  innerLa.innerHTML = "Сумма займа "+ la +" тыс.рублей";
  innerNom.innerHTML = "На срок "+  nom +" месяца";
  // 1/2 property price
  var maxLoan = pp/2;
  loanAmount.setAttribute("max", maxLoan);
  // total
  var percent = (la/100)*2,
      inday = nom*percent,
      total = Number(la) + Number(inday);
  
  // info message
  var infoLoan = d.getElementById('loan'),
      infoPeriod = d.getElementById('period'),
      infoWillReturn = d.getElementById('willreturn');
  infoLoan.innerHTML = la +" тыс. рублей";
  infoPeriod.innerHTML = nom +" месяцев";
  infoWillReturn.innerHTML =  Math.ceil(total) +" тыс. рублей";
}