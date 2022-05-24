function isSinglePrime(num) {
  let isPrime = true;
  if (typeof num === 'number') {
    if (!Number.isInteger(num) || num <= 1) {
      isPrime = false;
    }
    for (let i = 2; i < num && isPrime; i++) {
      if (num % i === 0) {
        isPrime = false;
        break;
      }
    }
    if (isPrime) 
    {
      console.log(num + ' is a prime number');
    } 
    else
    {
      console.log(num + ' is not a prime number');
    }  
  }
  else  
    console.log('Parametr is not number or array.');    
}

function isPrimeNumber(num) {
  if (typeof num === 'number') {
    isSinglePrime(num)
  } 
  else if (Array.isArray(num)) {
    for (let i of num)
    {
      isSinglePrime(i)
    }
  }
  else  
    console.log('Parametr is not number or array.');    
} 