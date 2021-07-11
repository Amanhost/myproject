#develo a program to find volume and surface area of a cubiod
l=int(input("Enput the length : "))
b=int(input("Enput the width : "))
h=int(input("Enput the height : "))
v=l*b*h
sa=2*(l*b+b*h+h*l)
print("Volume is=",v)
print("Surface area is=",sa)
