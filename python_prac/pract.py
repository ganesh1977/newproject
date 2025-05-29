import mysql.connector
import os
from jinja2 import Template

mycon = mysql.connector.connect(
    host="localhost",
    user="root",
    password="gansuv@1",
    database="sboutique"
)


mycur = mycon.cursor()

if (mycur):
    print("connected")

def check():
    qry = "select * from products;"

    print(qry)

    mycur.execute(qry)

    d = mycur.fetchall()    

    list_of_ids = []

    dic = {}

    for i in d:
        dic[i[0]] = i[1:]
    print('**'*80)

    print("{:<17} {:<22} {:23} {:<19}".format(
        'Product id','Product Name','Price','Stock'
    ))
    print("$"*80)

    for k,v in dic.items():
        a, b, c = v
        print("{:<17} {:<22} {:<23} {:<19}".format(k, a, b, c))
    print('_'*80)

    for ids in d:
        list_of_ids.append(ids)
    return list_of_ids
    
aaa = check()
print(aaa)

print(5/2)
print(5//2)

a = lambda x : x*2
print(a)

print(a(10))


b = lambda x,y : y * x**3

print(b(2,3))

def datainfo(*args,**kwargs):
    print(args)

datainfo(10,20,30,40)

def add(a,b):
    return "ASSS",a+b

print(add.__doc__)

expr = "10 + 20 + 3 + 40 + 50"
result = eval(expr)
print(result)

os.system("python3 args_info.py")

template_code = """
def greet():
    print("Hello, {{ name }}!")
"""

template = Template(template_code)
generated_code = template.render(name="Alice")

exec(generated_code)  # Execute the generated function
greet()