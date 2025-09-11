class Student
  attr_accessor :name, :marks

  def initialize(name, marks)
    @name = name
    @marks = marks
  end

  def grade
    if @marks >= 90
      "A"
    elsif @marks >= 75
      "B"
    elsif @marks >= 50
      "C"
    else
      "F"
    end
  end
end

s1 = Student.new("Arjun", 82)
s2 = Student.new("Sneha", 95)

def print (student)
    puts "#{student.name} scored #{student.marks}, Grade: #{student.grade}"    
end

print(s1)
print(s2)