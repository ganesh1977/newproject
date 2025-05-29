import array

class studnet:
    def __init__(self,sname,sadd):
        self.sname = sname
        self.sadd = sadd

    

stu1 = studnet('ganesh','guntur')
print(stu1)

a = array.array('i',[1,2,3])
print(a)

for i in a:
    print(i,end='')

a = [1,2,'rama']

for i in a:
    print(i,end='')

print("<br>")

number = [1,2,3,4,5,6,7,8,9,10]
print(number[5::2])


print("<br>")
pat = [11, 3, 2, 1, 2, 3, 1, 0, 1, 13]

for p in pat:
    if (p == 0):
        current = p
        break
    elif(p%2==0):
        continue
    print("EVEN:",p)
print("DATA:",current)

mylist = [2, 3, 5, 7, 11]
squared_list = [x**2 for x in mylist if x%2!=0]
print(squared_list) 

squared_dict = {x:x**2 for x in mylist if x%2!=0}
print(squared_dict)


#@abcd"""
def hello():
   return 'Hello World'
print(hello())

def abcd(function):
    def rama():
      func = function()
      string_lower = func.lower()
      return string_lower
    return rama()

@abcd('hello')