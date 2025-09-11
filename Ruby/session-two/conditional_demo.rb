# if ... elsif ... else

print "Emter the marks :"
marks = gets.chomp.to_i 

if marks > 90
    puts "Grade A"
elsif marks >80
    puts "Grade B"
elsif marks > 70
    puts "Grade C"
elsif marks > 40
    puts "Grade D"
else 
    puts "Grade F"
end

# Inline if
print "Enter you subject :"
subject = gets.chomp
print "Enter your marks :"
marks = gets.chomp.to_i
puts "#{subject} - Excellent" if marks > 90
puts "#{subject} - Very good" if marks > 80 && marks <= 90
puts "#{subject} - Good" if marks > 60 && marks <= 80
puts "#{subject} - Work Harder" if marks <= 60


#unless (opposite of if)
print "Emter the marks :"
marks = gets.chomp.to_i 

unless marks > 80
    puts "Work Harder"
end

#case (like switch in other languages)
print "Enter a subject name (ML, DM, DL) : "
subject = gets.chomp

case subject
when "ML"
  puts "Machine Learning is trending!"
when "DM"
  puts "Data Mining involves patterns in data"
when "DL"
  puts "Deep Learning uses neural networks"
else
  puts "Unknown subject"
end

#case with ranges
print "Please enter your marks (100) :"
marks =gets.chomp.to_i

case marks
when 90..100
  puts "Grade: A"
when 75..89
  puts "Grade: B"
when 50..74
  puts "Grade: C"
else
  puts "Grade: Fail"
end
