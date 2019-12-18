#include <stdio.h>

void bubble_sort(long [], long);

int main()
{
  long array[100], n, c;

  printf("Enter number of elements\n");
  scanf("%ld", &n);

  printf("Enter %ld integers\n", n);

  for (c = 0; c < n; c++)
    scanf("%ld", &array[c]);

  bubble_sort(array, n);

  printf("Sorted list in ascending order:\n");

  for (c = 0; c < n; c++)
     printf("%ld\n", array[c]);

  return 0;
}
