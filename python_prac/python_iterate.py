import random

a = ['cat','monkey','goat']
iter_a = iter(a)

print(iter_a.__next__())
print(iter_a.__next__())
print(iter_a.__iter__())
print(iter_a.__iter__())
print(" ------- ")
rand_iter = iter(lambda: random.randint(1,5),5)

for num in rand_iter:
    print(num)

"""rand_iter = iter(lambda: random.randint(1, 10), 5)  # Stops when 5 is generated

for num in rand_iter:
    print(num)"""

