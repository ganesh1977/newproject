class abc:
    def __init__(self,brand,model):
        self.brand = brand
        self.model = model
    def move(self):
        print("drive")

ab = abc('boat1','boat2')
print(ab.move())

s = "amaama"
half = len(s)

s1 = s[:half]
print(s1)

s2 = s[half:] if len(s) % 2 == 0 else s[half + 1:]
print(s2)

abc = "adsef"
print("".join(reversed(abc)))

aa = " how are you "

reversedwords = ' '.join(aa.split()[::-1])
print(reversedwords)

words = aa.split()
print(words)

stack = []
for word in words:
    stack.append(word)

print(stack)

ar = ascii("¥")
print(ar)

x = bin(50)
print(x)

class number:
    num = 100

    def __index__(self):
        return (self.num)
    
print(bin(number()))    