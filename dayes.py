# write a program to convert given number of a day  measure of a time in year  weeks and day
#for EX-375 day is equal to  3 day........
n=int(input("Enter a number which you want ot convert"))
y=n/365
w=(n%365)/7
d=(n%365)%7

print("Year=",y)
print("Week=",w)
print("Day=",d)
