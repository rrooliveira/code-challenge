import math
import os
import random
import re
import sys

from collections import defaultdict
#
# Complete the 'minOperations' function below.
#
# The function is expected to return an INTEGER.
# The function accepts following parameters:
#  1. INTEGER_ARRAY arr
#  2. INTEGER threshold
#  3. INTEGER d
#

def minOperations(arr, threshold, d):
    dp = defaultdict(lambda: [0, 0])
    arr.sort()
    ans = sys.maxsize
    for x in arr:
        steps = 0
        while True:
            dp[x][0] += 1
            dp[x][1] += steps
            if dp[x][0] >= threshold:
                ans = min(ans, dp[x][1])
            if x == 0:
                break
            x //= d
            steps += 1
    return ans