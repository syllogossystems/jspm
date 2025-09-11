puts "Loops Demo"

# 1. while → continue as long as condition true
marks = 40
puts "\n1. while loop (increase marks until >= 50):"
while marks < 50
  puts "Marks: #{marks}"
  marks += 5
end
puts "Final Marks: #{marks}"

# 2. until → continue until condition true
marks = 40
puts "\n2. until loop (keep adding until marks >= 50):"
until marks >= 50
  puts "Marks: #{marks}"
  marks += 5
end
puts "Final Marks: #{marks}"

# 3. each → iterate over collection elements (Array)
subjects = ["ML", "DL", "NLP"]
puts "\n3a. each loop (Array subjects):"
subjects.each do |sub|
  puts "Subject: #{sub}"
end

# 3b. each → iterate over collection elements (Hash)
marks = { "ML" => 85, "DL" => 92, "NLP" => 78 }
puts "\n3b. each loop (Hash subject => marks):"
marks.each do |subject, score|
  puts "#{subject} => #{score}"
end

# 4. break → exit loop early
puts "\n4. Using break:"
marks.each do |subject, score|
  break if score < 80   # exit when we find marks less than 80
  puts "#{subject} => #{score}"
end

# 5. next → skip to next iteration
puts "\n5. Using next:"
marks.each do |subject, score|
  next if score < 80   # skip subjects with marks less than 80
  puts "#{subject} => #{score}"
end
