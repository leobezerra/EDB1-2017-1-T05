for size in 100000 500000 1000000; do
  echo -e "$size: \c"
  for dup in 10 50 90; do
    echo -e "$dup ( \c"
    for seed in {1..3}; do
      echo -e "$seed \c"
      python3 gen-instances.py $size $dup $seed > instancias/$dup.$size.$seed.in;
    done
    echo -e ") \c"
  done
  echo
done
