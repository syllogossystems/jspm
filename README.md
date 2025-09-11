# Setup forst Rails project
1. Open PowerShell in Administrator Mode and Go to Ruby Folder
  ```gem install rails -v “7.1.3.4”```
2. Run ```Rails -v```
3. Go to Workspace where you want to create rails project
4. Run ```rails _7.1.3.4_ new student_registration_app -d sqlite3``` for create Rails app
5. Go to the cd .\student_registration_app\
6. Run in Powersheell ```bundle install```
7. ```rails db:create```
8. ```rails server```
Check http://localhost:3000

# scaffold
1. Run bellow commands in powershell
    ```
      rails generate scaffold Student enrollment_number:string first_name:string last_name:string date_of_birth:date email:string phone:string
      bundle install
      rails db:create db:migrate
      rails server
    ```
