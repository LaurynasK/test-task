# test-task
Task to create Gallery page

## Test Task. 

This test task built on top of CodeIgniter 3.1.8 (latest as of 2018-05-08)

### To successfully install web app you must edit few config files and migrate sql file to your mySQL

#### 1) application/config.php:
```
$config['base_url'] = `your url`;
```

#### 2) application/database.php:
```
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => `your data base username`,
	'password' => `user password`,
	'database' => `your database name`,
```

and finally you must migrate provided 'zet-test-task.sql' file and that is it you are good to go.

To see how project look like live visit https://test-task-001.herokuapp.com 
```
To upload picture just drop picture and push button upload image, other fields is just optional
To search just enter phrase in search input field and hit [enter]
```

During project development was created few files 
```
  application/controllers/Upload.php  // to handle upload action from front-ent
  application/libraries/Thumbnail.php // to handle resize of picture
  application/models/File_model.php   // to hande all data operations including search, pagination actions
  application/views/main.php          // view file to show gallery
  
  assets/resources/Main.js            // to be responsible for all js elements (tagify.js dropzone.js) 
```
Few external files was uploaded
- Blueimp-gallery // for smooth gallery view (not thumbnails)  
- Bootstrap
- Dropzone // for droppable files 
- jquery
- tagify  // for keywords 
  
