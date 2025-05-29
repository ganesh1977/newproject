class person:
    def __init__(self,age,name):
        self.name = name
        self.age = age
    @property
    def setnamee(self):
        name = self.name
        return name

p = person(10,'rama')

print(p.age)

names = p.setnamee()
print(names)