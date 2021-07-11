#Explanation of hierarchical inheritance
class shape:
    def setvalue(self,s):
        self.s=s
class Square(shape):
    def area(self):
       return self.s*self.s
class cube(shape):
    def volume(self):
        return self.s*self.s*self.s
x=int(input("Enter the side of squire : "))
sq=Square()
sq.setvalue(x)
print("Area of squire:",sq.area())
x=int(input("Enter the side of cube:"))
cu=cube()
cu.setvalue(x)
print("Area of suare: ",cu.volume())

