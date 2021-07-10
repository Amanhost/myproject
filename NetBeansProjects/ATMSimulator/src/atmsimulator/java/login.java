package ATMSimulator.java;
import java.awt.*;
import static java.awt.Font.BOLD;
import java.awt.event.*;
import java.awt.swing.*;
import java.sql.*;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPasswordField;

public class login extends JFrame implements ActionListener{
 JLabel l1,l2,l3;
 JTextfield tf1;
 JPasswordField pf2;
 JButton b1,b2,b3;
 
 login(){
   setFont(new Font("system",Font.BOLD,22));
   Font f=getFont();
   FontMetrics fm=getFontMetrics(f);
   int x=fm.stringWidth("AUTOMATED TELLER MACHINE");
   int y=fm.stringWidth("");
   int z=getWidth() -x;
   int w= z/y;
   String pad="";
   
   pad=String.format("&"+w+"s",pad);
  setTitle(pad+"AUTOMATED TELLER MACHIN");
  
  l1=new JLabel("Welcome to ATM");
  l1.setFont(new Font("Osward",Font.BOLD,38));
  
  l2=new JLabel("Card Number");
  l2.setFont(new Font("Raleway",Font.BOLD,28));
  
  l3=new JLabel("Pin");
  l3.setFont(new Font("Raleway",Font.BOLD,28));
  
  tf1=new JTxetField(15);
  pf2=new JPasswordField(15);
  
  b1=new JButton("SIGN IN");
  b1.setBackground(Color.BLACK);
  b1.setForeground(Color.WHITE);
  
  b2=new JButton("Clear");
  b2.setBackground(Color.BLACK);
  b2.setForeground(Color.WHITE);
  
  b3=new JButton("SIGN UP");
  b3.setBackground(Color.BLACK);
  b3.setForeground(Color.WHITE);
  
  
  setLayout(null);
  l1.setBounds(170,50,450,200);
  add(l1);
  l2.setBounds(125,150,375,200);
  add(l2);
  l3.setBounds(125,225,375,200);
  add(l3);
  
  tf1.setFont(new Font("Arial", Font.BOLD,14));
  tf1.setBounds (300,235,230,30);
  add(tf1);
  
  pf2.setFont(new Font("Arial", Font.BOLD,14));
  pf2.setBounds (300,310,230,30);
  add(pf2);
  
  b1.setFont(new Font("Arial", Font.BOLD,14));
  b1.setBounds (300,400,100,30);
  add(b1);
  
 b2.setFont(new Font("Arial", Font.BOLD,14));
  b2.setBounds (430,400,100,30);
  add(b2);
  
  b3.setFont(new Font("Arial", Font.BOLD,14));
  b3.setBounds (300,235,230,30);
  add(b3);
  
  b1.addActionListener(this);
  b2.addActionListener(this);
  b3.addActionListener(this);
 
 getContentPane().setBackground(Color.WHITE);
 setSize(375,375);
 setLocation(500,200);
 setVisible(true);
 }
 public static void main(String arg[])
 {
     
 }
 
}





























