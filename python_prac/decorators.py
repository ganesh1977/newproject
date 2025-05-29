import inspect

def parent(func):
    def child():
        print("abcd")
        func()
        print("ding dong bell")
    return child
@parent

def grandparent():
    print("ramama")

grandparent()


def make_unit(f):
    def multi(x):
        return x * f
    return multi

dbl = make_unit(5)
print(dbl(5))

def fun(cls):
    cls.lilly = cls.__name__
    return cls
@fun
class Person:
    pass

print(Person.lilly)


def fun(arg1: int, arg2:int, *arg3:int,**kwagrs:int)->bool:
    pass

sig = inspect.signature(fun(1,2))
print(sig)

