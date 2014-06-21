#Anindya Guha

def fibonacci(n):
    """
    A memoized implementation of (a function
    that generates) the fibonacci sequence, upto the nth digit.
    """
    if n==0:
    	return None
    fibarray = [0 for i in range(n)]
    fibarray[0] = 0
    fibarray[1] = 1
    for i in range(2, n):
    	fibarray[i] = fibarray[i-1] + fibarray[i-2]
    [print(ch, end=" ") for ch in fibarray]
    return fibarray

n = input()
fibonacci(int(n))


