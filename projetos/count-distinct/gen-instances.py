from sys import argv
from random import randint, shuffle, seed

if len(argv) != 4:
    print("Usage: {} cardinality duplicity seed".format(argv[0]))
    exit()

cardinality = int(argv[1])
duplicity = int(argv[2])
seed_ = int(argv[3])

seed(seed_)
displacement = 10e10 / cardinality
test_set = [randint(displacement * i, displacement * (i+1)) for i in range(0, cardinality)]
shuffle(test_set)

n_dup = int(duplicity / 100 * cardinality / 2)
test_set = test_set[:-n_dup]
dup_set = [test_set[randint(0,len(test_set) - 1)] for i in range(0,n_dup)]

shuffle(test_set)
test_set.extend(dup_set)

print("\n".join([str(x) for x in test_set]))
