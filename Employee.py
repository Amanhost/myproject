# Employee Example of multi-level inheritance
class Employee:
    def setEmployee(self,empid,empname):
        self.empid=empid
        self.empname=empname
    def getEmployee(self):
        print("Employee id=",self.empid)
        print("Employee Name=",self.empname)
class Payroll(Employee):
    def setpayroll(self,bs,hra,da):
        self.bs=bs
        self.hra=hra
        self.da=da
    def getPayroll(self):
        print("Basick Salary=",self.bs)
        print("House Rent Allounces=",self.hra)
        print("Dearness Allowence=",self.da)
class payslip(Payroll):
    def netsalary(self):
        print("Net salary=",(self.bs+self.hra+self.da))
eid=int(input("Enter Employee id"))
name=input("Enter Employee name")

b=int(input("Enter basick Salary : "))
h=int(input("Enter House rent Allounces : "))
d=int(input("Enter Drearness Allowences : "))
ps=payslip()
ps.setEmployee(eid,name)
ps.setpayroll(b,h,d)
print("*********************Print Payslip*******************")
ps.getEmployee()
ps.getPayroll()
ps.netsalary()
