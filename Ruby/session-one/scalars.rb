puts "------------ String ------------"
name = "Prabhat"

print name
print " => "
print name.class
print "\n"
print String.superclass
puts ""

puts "------------ Boolean ------------"
is_student = false
is_teacher = true

puts "#{is_student} => #{is_student.class}"
puts "#{is_teacher} => #{is_teacher.class}"

puts "------------ Numbers ------------"
age = 39
pi = 22/7
weight = 91.45
complex_number = c = 3+4i

puts "#{age} => #{age.class}"
puts "#{pi} => #{pi.class}"
puts "#{weight} => #{weight.class}"
puts "#{complex_number} => #{complex_number.class}"

puts "----------------- Nil ------------------"
is_null = nil
puts "#{is_null} => #{is_null.class}"
