const display = document.getElementById("display");
let firstOperand = null;
let secondOperand = null;
let operator = null;

function addToDisplay(value) {
  display.value += value;
}

function clearDisplay() {
  display.value = "";
  firstOperand = null;
  secondOperand = null;
  operator = null;
}

function back() {
  display.value = display.value.slice(0, -1);
}

function percentage() {
  display.value = display.value / 100;
}

function operate(symbol) {
  firstOperand = display.value;
  operator = symbol;
  display.value = "";
}

function calculate() {
  secondOperand = display.value;
  switch (operator) {
    case "+":
      display.value = +firstOperand + +secondOperand;
      break;
    case "-":
      display.value = +firstOperand - +secondOperand;
      break;
    case "*":
      display.value = +firstOperand * +secondOperand;
      break;
    case "/":
      display.value = +firstOperand / +secondOperand;
      break;
  }
}
