puts "Hello AI & DS Students"   # newline
print "This is Ruby "           # no newline
print "I/O demo\n"
p [1, 2, 3]                     # debugging purpose

print "Enter your name: "
name = gets.chomp

puts "Hello " + name

print "Enter marks in Machine Learning: "
marks = gets.chomp.to_i

print "Enter your batch :"
batch = gets

puts "Hello #{name}, you scored #{marks} in ML."