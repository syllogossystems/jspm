puts "Ruby Hashes Demo (Subjects => Marks)"

# 1. Key–Value Mapping
marks = { "Machine Learning" => 85, "Data Mining" => 78, "Deep Learning" => 92 }
puts "\n1. Key–Value Mapping:"
puts marks.inspect

# 2. Keys can be Strings or Symbols
student = { name: "Arjun", year: 3, gpa: 8.2 }
puts "\n2. String/Symbol Keys:"
puts student.inspect

# 3. Dynamic & Resizable (add/update)
marks["NLP"] = 88          # add new subject
marks["Data Mining"] = 80  # update mark
puts "\n3. Dynamic & Resizable:"
puts marks.inspect

# 4. Mixed Keys & Values
mixed = { 
  "Machine Learning" => 85,   # String key
  :DeepLearning => 92,        # Symbol key
  101 => "Data Mining",       # Integer key
  "NLP" => 88.5               # Float value
}

puts "\n4. Mixed Keys & Values:"
puts mixed.inspect

# 5. Accessing Values
puts "\n5. Accessing Values:"
puts "ML Marks => #{marks["Machine Learning"]}"
puts "DL Marks => #{marks["Deep Learning"]}"

# 6. Iteration
puts "\n6. Iterating Hash:"
marks.each do |subject, mark|
  puts "#{subject} => #{mark}"
end

# 7. Useful Methods
puts "\n7. Useful Methods:"
puts "Subjects: #{marks.keys.inspect}"
puts "Marks: #{marks.values.inspect}"
puts "Has NLP? #{marks.has_key?("NLP")}"
puts "Has 100 marks? #{marks.has_value?(100)}"
