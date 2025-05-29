import gc
import sys
from functools import lru_cache
import matplotlib.pyplot as plt
import tensorflow as tr
import torch
import objgraph
from memory_profiler import profile

objgraph.show_growth(limit=10)
gc.disable()
gc.set_debug(gc.DEBUG_LEAK)
gc.collect()
def create_circular_reference():
    list1 = []
    list2 = []
    list1.append(list2)
    list2.append(list1)
    gc.enable()

create_circular_reference()
print(gc.collect())

class myobj:
    pass

obj1 = myobj()
print(sys.getrefcount(obj1))

obj2 = obj1
print(sys.getrefcount(obj2))

del obj1
print(sys.getrefcount(obj2))

del obj2
#print(sys.getrefcount(obj1))

@lru_cache(maxsize=1245)
def cachememory(x):
    return x * 2

cachememory.cache_clear()  # Clear cache

plt.clf()
plt.cla()
plt.close('all')

#tr.keras.backend.clear_session()

#torch.cuda.empty_cache()

# Show growing types
# Show backrefs of a suspected object
#print(f"Unreachable objects: {len(gc.garbage)}")
#objgraph.show_backrefs([obj1], filename='backrefs.png')

@profile
def your_function():
    a = [i for i in range(1000000)]
    return a

print(your_function())