puts "Ruby Arrays with AI & DS Subjects"

# 1. Ordered collection (indexed from 0)
subjects = ["Machine Learning", "Data Mining", "Deep Learning"]
puts "\n1. Ordered collection:"
puts "subjects[0] => #{subjects[0]}"
puts "subjects[1] => #{subjects[1]}"

# 2. Dynamic, resizable
subjects << "Natural Language Processing"
subjects.push("Big Data Analytics")
puts "\n2. Dynamic, resizable:"
puts subjects.inspect

# 3. Duplicates allowed
subjects << "Machine Learning"   # duplicate subject
puts "\n3. Duplicates allowed:"
puts subjects.inspect

# 4. Mixed types
subjects << 10.0
puts "\n4. Mixed types:"
puts subjects.inspect
subjects.delete(10.0)

# 5. Negative index = from the end
puts "\n5. Negative index:"
puts "subjects[-1] => #{subjects[-1]}"  # last element
puts "subjects[-2] => #{subjects[-2]}"  # second last

# 6. Useful methods
puts "\n6. Useful methods:"
puts "Count: #{subjects.length}"
puts "Sorted: #{subjects.sort.inspect}"
last = subjects.pop
puts "After pop (removed #{last}): #{subjects.inspect}"

# 7. Slicing and ranges
puts "\n7. Slicing & Ranges:"
puts "subjects[1, 3] => #{subjects[1,3].inspect}"   # 3 subjects starting at index 1


# 8. Built-in methods: search, filter, map
puts "\n8. Search, Filter, Map:"
puts "Includes Deep Learning? #{subjects.include?("Deep Learning")}"
filtered = subjects.select { |s| s.length > 15 }
puts "Subjects with long names: #{filtered.inspect}"
mapped = subjects.map { |s| s.upcase }
puts "Uppercased subjects: #{mapped.inspect}"
