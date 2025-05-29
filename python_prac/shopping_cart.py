#cartItems = ['Apples','Orange','wantermelon','banana']

cartItems = []
cartTotal = 0

"""cartItems.append("Apple")
cartTotal += 0.5
cartItems.append("Orange")
cartTotal += 9.0
cartItems.append("watermelon")
cartTotal += 10

cartItems.append("banana")
cartTotal += 50"""

ar = []

def addItem(Itemname,ItemPrice):
    cartItems.append(Itemname)
    #global cartTotal
    #cartTotal += ItemPrice
    return ItemPrice

cartTotal+=addItem("apple",0.5)
cartTotal+=addItem("apple",0.5)
cartTotal+=addItem("apple",0.5)
cartTotal+=addItem("orange",0.9)
cartTotal+=addItem("orange",0.9)
cartTotal+=addItem("banana",7.8)

for i in range(0,len(cartItems)):
    print(cartItems[i])    

cartSummary  = dict((item,cartItems.count(item)) for item in cartItems)
print(cartSummary)

dict1 = {"ap":10,"bp":20}
dict2 = {"bp":20, "aa":30}

total = {k: dict1.get(k,0) + dict2.get(k,0) for k in set(dict1)}
print(total)
    