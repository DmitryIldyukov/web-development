let stack = [];
let operations = ['/', '*', '+', '-'];
let result = 0;

function operate(op, a, b) {
  switch(op) {
    case '/':
      if (b == 0) {
        console.log('Ошибка, на 0 делить нельзя');       //Операции
        break;
      } else {
        return a / b;
      }
    case '*':
      return a * b;
    case '+':
      return Number(a) + Number(b);
    case '-':
      return a - b;
  }
}

function reverseString(str) {
  return str.split("").reverse().join("");                 //
}

function isValid(string) {
  return /^[ .()0-9*/+-]+$/.test(string)                   //Проверка на валидность символов
}

function countBrackets(string) {                           //Проверка на валидность скобок
  let left = 0;
  let right = 0;
  for (let i = 0; i < string.length; i++) {
    if (string[i] == '(') left++;
  }
  for (let i = 0; i < string.length; i++) {
    if (string[i] == ')') right++;
  }
  if (left == right) return true
  else return false;
}

function calc(string) {
  if (isValid(string) && countBrackets(string)) {
    string = string.replace(/[(]/g, ' ');
    string = string.replace(/[)]/g,'');
    // console.log(string);
    let temp = '';
    for (let i = string.length - 1; i >= 0; i--) {
      if (string[i] != ' ')
        temp += string[i]
      else {
        if (operations.includes(temp)) {
          temp = ''
        } else {
          stack.push(reverseString(temp));
          temp = ''
        }
      }
      if (operations.includes(temp)) 
        stack.push(operate(temp, stack.pop(), stack.pop()));
    }
    return stack.pop();
  } else {
    console.log('Ошибка в написании');
  }
}
