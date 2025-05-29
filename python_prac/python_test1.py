class counter:
    def __init__(self,start,end):
        self.start = start
        self.end = end
    def __iter__(self):
        return self
    def __next__(self):
        if (self.start>=self.end):
            raise StopIteration
        value= self.start
        self.start += 1
        return value
    

cnt = counter(10,2)

print(cnt)

for num in cnt:
    print(num)

