json.extract! student, :id, :enrollment_number, :first_name, :last_name, :date_of_birth, :email, :phone, :created_at, :updated_at
json.url student_url(student, format: :json)
