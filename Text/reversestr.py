"""This program takes a string from STDIN and reverses it."""

def reverse(string):
    """This function recursively reverses a string."""
    if len(string) == 0:
        return string
    else:
        return string[len(string)-1] + reverse(string[:len(string)-1])

def reverse2(string):
    """This function iteratively reverses a string."""
    newstr = ""
    for i in range(len(string)-1, -1, -1):
        newstr += string[i]
    return newstr

string = input()
print(reverse(string))

