# Setup forst Rails project
1. Open PowerShell in Administrator Mode and Go to Ruby Folder an run below command to install **Rails 7.1.3.4**
  ```
gem install rails -v “7.1.3.4”
```
3. Run
```
Rails -v
```
4. Go to Workspace where you want to create rails project
5. For **creating Rail application** by runing with sqlite3
```
rails _7.1.3.4_ new student_registration_app -d sqlite3
```
6. Go to the cd .\student_registration_app\
7. Run bellow commands to package the application and database creation.
```
bundle install
rails db:create
```
8. Run Rails Server
```
rails server
```
Check http://localhost:3000

# scaffold
1. Run bellow commands in powershell
```
rails generate scaffold Student enrollment_number:string first_name:string last_name:string date_of_birth:date email:string phone:string
bundle install
rails db:create db:migrate
```
2. Run Rails Server
```
rails server
```
Check http://localhost:3000/students
