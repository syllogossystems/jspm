class CreateStudents < ActiveRecord::Migration[7.1]
  def change
    create_table :students do |t|
      t.string :enrollment_number
      t.string :first_name
      t.string :last_name
      t.date :date_of_birth
      t.string :email
      t.string :phone

      t.timestamps
    end
  end
end
