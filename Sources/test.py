def insertionSort(a):
    for i in range(1, len(a)):
        current_value = a[i]                       # storing the current iterated index value into a temporary variable
        j = i - 1                                  # flaging the immediate previous index position
        while j >= 0 and current_value < a[j]:     # now compare current value with each element from left side sorted array until j == 0
            a[j + 1] = a[j]
            j -= 1
        a[j + 1] = current_value

    


if __name__ == "__main__":
    
    print("Enter array length: ")
    n = int(input())
    a = [None] * n
    print("Enter array elements: ")
    for i in range(n):
        a[i] = int(input(f"Element elemnt {i}: "))

    print("\nArray before sorting: ")
    for i in a:
        print(i, end=" ")
        
    insertionSort(a)

    print("\nArray after sorting: ")
    for i in a:
        print(i, end=" ")