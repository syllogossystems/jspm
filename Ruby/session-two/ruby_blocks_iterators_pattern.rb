#Code Block
3.times do
  puts "Hello AI & DS Students"
end


#Iterator (each)
subjects = ["ML", "DL", "NLP"]

subjects.each do |sub|
  puts "Subject: #{sub}"
end


#Pattern Matching
student = { name: "Arjun", subject: "ML", marks: 85 }

case student
in { name:, subject:, marks: }
  puts "#{name} scored #{marks} in #{subject}"
end

# Without Pattern Matching
name = student[:name]
subject = student[:subject]
marks = student[:marks]

puts "#{name} scored #{marks} in #{subject}"