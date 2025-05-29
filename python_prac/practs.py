def fun(n):
    print(n)
    s = lambda a : a * n
    return s
myd = fun(2)
print(myd)
print(myd(12))