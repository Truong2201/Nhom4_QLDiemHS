<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('registration','LoginController@index1')->name('index1');
Route::post('registration','LoginController@progressRegistration')->name('progressRegistration');

Route::get('login','LoginController@index')->name('login');
Route::post('login','LoginController@progressLogin')->name('progressLogin');
Route::get('login','LoginController@logout')->name('logout');

Route::get('export', 'ExportController@export')->name('export');

Route::get('', function () {
    return view('school.dashboard');
});

Route::middleware('check_login')->group(function() {
    

    Route::group(['prefix' => 'student'], function () {

        Route::get('index','StudentController@index')->name('student.index');
        Route::post('index','StudentController@index')->name('student.index');
        Route::post('/loadGrade','StudentController@loadGrade')->name('loadGrade');
        Route::post('/loadClass','StudentController@loadClass')->name('loadClass');

        Route::get('indexkl','StudentController@indexkl')->name('student.indexkl');
        Route::post('indexkl','StudentController@indexkl')->name('loadStudent');

        Route::post('show','StudentController@show')->name('student.show');
        Route::get('dashboard','StudentController@dashboard')->name('student.dashboard');

        // Route::get('data','StudentController@datajson')->name('student.data');

        //thêm học sinh
        Route::get('add',['as'=>'student.add',
        'uses'=>'StudentController@add',
        'middleware'=>'checkacl:student-add']);
        Route::post('store',['as'=>'student.store',
        'uses'=>'StudentController@store',
        'middleware'=>'checkacl:student-add']);

        //sua hoc sinh
        Route::get('edit/{id}',['as'=>'student.edit',
        'uses'=>'StudentController@edit',
        'middleware'=>'checkacl:student-edit']);
        Route::post('update/{id}',['as'=>'student.update',
        'uses'=>'StudentController@update',
        'middleware'=>'checkacl:student-edit']);
        
        Route::get('destroy/{id}',['as'=>'student.destroy',
        'uses'=>'StudentController@destroy',
        'middleware'=>'checkacl:student-delete']);
        Route::get('destroy/{id}','StudentController@destroy')->name('student.destroy');
        Route::get('detail/{id}','StudentController@detail')->name('student.detail');

        Route::get('/student1/layout', 'StudentController@show')->name('student.layout');
    });

    Route::group(['prefix' => 'teacher'], function () {

        //danh sach giao vien
        Route::get('index',['as'=>'teacher.index',
        'uses'=>'TeacherController@index',
        'middleware'=>'checkacl:teacher-list']);

        Route::post('show/{id}','TeacherController@show')->name('teacher.show');
        Route::get('dashboard/{id}','TeacherController@dashboard')->name('teacher.dashboard');
        
        //them giao vien
        Route::get('add',['as'=>'teacher.add',
        'uses'=>'TeacherController@add',
        'middleware'=>'checkacl:teacher-add']);
        Route::post('store',['as'=>'teacher.store',
        'uses'=>'TeacherController@store',
        'middleware'=>'checkacl:teacher-add']);

        Route::get('edit/{id}',['as'=>'teacher.edit',
        'uses'=>'TeacherController@edit',
        'middleware'=>'checkacl:teacher-edit']);
        Route::post('update/{id}',['as'=>'teacher.update',
        'uses'=>'TeacherController@update',
        'middleware'=>'checkacl:teacher-edit']);
        
        Route::get('destroy/{id}',['as'=>'teacher.destroy',
        'uses'=>'TeacherController@destroy',
        'middleware'=>'checkacl:teacher-delete']);
        
        Route::get('detail/{id}','TeacherController@detail')->name('teacher.detail');
    });

    Route::group(['prefix' => 'class'], function () {

        Route::get('index',['as'=>'class.index',
        'uses'=>'ClassController@index',
        'middleware'=>'checkacl:class-list']);
        
        Route::get('data','ClassController@datajson')->name('class.data');

        Route::get('add',['as'=>'class.add',
        'uses'=>'ClassController@add',
        'middleware'=>'checkacl:class-add']);
        Route::post('store',['as'=>'class.store',
        'uses'=>'ClassController@store',
        'middleware'=>'checkacl:class-add']);

        Route::get('edit/{id}',['as'=>'class.edit',
        'uses'=>'ClassController@edit',
        'middleware'=>'checkacl:class-edit']);
        Route::post('update/{id}',['as'=>'class.update',
        'uses'=>'ClassController@update',
        'middleware'=>'checkacl:class-edit']);
        
        Route::get('destroy/{id}',['as'=>'class.destroy',
        'uses'=>'ClassController@destroy',
        'middleware'=>'checkacl:class-delete']);
        
        Route::get('detail/{id}','ClassController@detail')->name('class.detail');
    });

    Route::group(['prefix' => 'schoolyear'], function () {

        Route::get('index',['as'=>'schoolyear.index',
        'uses'=>'SchoolyearController@index',
        'middleware'=>'checkacl:schoolyear-list']);
        
        Route::get('data','SchoolyearController@datajson')->name('schoolyear.data');

        Route::get('add',['as'=>'schoolyear.add',
        'uses'=>'SchoolyearController@add',
        'middleware'=>'checkacl:schoolyear-add']);
        Route::post('store',['as'=>'schoolyear.store',
        'uses'=>'SchoolyearController@store',
        'middleware'=>'checkacl:schoolyear-add']);

        Route::get('edit/{id}',['as'=>'schoolyear.edit',
        'uses'=>'SchoolyearController@edit',
        'middleware'=>'checkacl:schoolyear-edit']);
        Route::post('update/{id}',['as'=>'schoolyear.update',
        'uses'=>'SchoolyearController@update',
        'middleware'=>'checkacl:schoolyear-edit']);
        
        Route::get('destroy/{id}',['as'=>'schoolyear.destroy',
        'uses'=>'SchoolyearController@destroy',
        'middleware'=>'checkacl:schoolyear-delete']);
        
        Route::get('detail/{id}','SchoolyearController@detail')->name('schoolyear.detail');
    });
    Route::group(['prefix' => 'user'], function () {

        Route::get('index',['as'=>'user.index',
        'uses'=>'UserController@index',
        'middleware'=>'checkacl:user-list']);
        
        Route::get('data','UserController@datajson')->name('user.data');

        Route::get('add',['as'=>'user.add',
        'uses'=>'UserController@add',
        'middleware'=>'checkacl:user-add']);
        Route::post('store',['as'=>'user.store',
        'uses'=>'UserController@store',
        'middleware'=>'checkacl:user-add']);

        Route::get('edit/{id}',['as'=>'user.edit',
        'uses'=>'UserController@edit',
        'middleware'=>'checkacl:user-edit']);
        Route::post('update/{id}',['as'=>'user.update',
        'uses'=>'UserController@update',
        'middleware'=>'checkacl:user-edit']);
        
        Route::get('destroy/{id}',['as'=>'user.destroy',
        'uses'=>'UserController@destroy',
        'middleware'=>'checkacl:user-delete']);
        
        Route::get('detail/{id}','UserController@detail')->name('user.detail');
    });

    Route::group(['prefix' => 'role'], function () {

        Route::get('index',['as'=>'role.index',
        'uses'=>'RoleController@index',
        'middleware'=>'checkacl:role-list']);
        
        Route::get('data','RoleController@datajson')->name('role.data');

        Route::get('add',['as'=>'role.add',
        'uses'=>'RoleController@add',
        'middleware'=>'checkacl:role-add']);
        Route::post('store',['as'=>'role.store',
        'uses'=>'RoleController@store',
        'middleware'=>'checkacl:role-add']);

        Route::get('edit/{id}',['as'=>'role.edit',
        'uses'=>'RoleController@edit',
        'middleware'=>'checkacl:role-edit']);
        Route::post('update/{id}',['as'=>'role.update',
        'uses'=>'RoleController@update',
        'middleware'=>'checkacl:role-edit']);
        
        Route::get('destroy/{id}',['as'=>'role.destroy',
        'uses'=>'RoleController@destroy',
        'middleware'=>'checkacl:role-delete']);
        
        Route::get('detail/{id}','RoleController@detail')->name('role.detail');
    });

    Route::group(['prefix' => 'permission'], function () {

        Route::get('index',['as'=>'permission.index',
        'uses'=>'PermissionController@index',
        'middleware'=>'checkacl:permission-list']);
        
        Route::get('data','PermissionController@datajson')->name('permission.data');

        Route::get('add',['as'=>'permission.add',
        'uses'=>'PermissionController@add',
        'middleware'=>'checkacl:permission-add']);
        Route::post('store',['as'=>'permission.store',
        'uses'=>'PermissionController@store',
        'middleware'=>'checkacl:permission-add']);

        Route::get('edit/{id}',['as'=>'permission.edit',
        'uses'=>'PermissionController@edit',
        'middleware'=>'checkacl:permission-edit']);
        Route::post('update/{id}',['as'=>'permission.update',
        'uses'=>'PermissionController@update',
        'middleware'=>'checkacl:permission-edit']);
        
        Route::get('destroy/{id}',['as'=>'permission.destroy',
        'uses'=>'PermissionController@destroy',
        'middleware'=>'checkacl:permission-delete']);
        
        Route::get('detail/{id}','PermissionController@detail')->name('permission.detail');
    });

    Route::group(['prefix' => 'grade'], function () {
        
        Route::get('index',['as'=>'grade.index',
        'uses'=>'GradeController@index',
        'middleware'=>'checkacl:grade-list']);

        Route::get('layout','GradeController@show')->name('grade.show');
        Route::post('dashboard','GradeController@dashboard')->name('grade.dashboard');
        
        Route::get('add',['as'=>'grade.add',
        'uses'=>'GradeController@add',
        'middleware'=>'checkacl:grade-add']);
        Route::post('store',['as'=>'grade.store',
        'uses'=>'GradeController@store',
        'middleware'=>'checkacl:grade-add']);

        Route::get('edit/{id}',['as'=>'grade.edit',
        'uses'=>'GradeController@edit',
        'middleware'=>'checkacl:grade-edit']);
        Route::post('update/{id}',['as'=>'grade.update',
        'uses'=>'GradeController@update',
        'middleware'=>'checkacl:grade-edit']);
        
        Route::get('destroy/{id}',['as'=>'grade.destroy',
        'uses'=>'GradeController@destroy',
        'middleware'=>'checkacl:grade-delete']);
        
        Route::get('detail/{id}','GradeController@detail')->name('grade.detail');
    });

    Route::group(['prefix' => 'subject'], function () {

        Route::get('index',['as'=>'subject.index',
        'uses'=>'SubjectController@index',
        'middleware'=>'checkacl:subject-list']);

        Route::get('add',['as'=>'subject.add',
        'uses'=>'SubjectController@add',
        'middleware'=>'checkacl:subject-add']);
        Route::post('store',['as'=>'subject.store',
        'uses'=>'SubjectController@store',
        'middleware'=>'checkacl:subject-add']);

        Route::get('edit/{id}',['as'=>'subject.edit',
        'uses'=>'SubjectController@edit',
        'middleware'=>'checkacl:subject-edit']);
        Route::post('update/{id}',['as'=>'subject.update',
        'uses'=>'SubjectController@update',
        'middleware'=>'checkacl:subject-edit']);
        
        Route::get('destroy/{id}',['as'=>'subject.destroy',
        'uses'=>'SubjectController@destroy',
        'middleware'=>'checkacl:subject-delete']);
        
        Route::get('/student1/layout', 'SubjectController@show')->name('subject.layout');
    });
    
    Route::group(['prefix' => 'semester1'], function () {

        Route::get('index',['as'=>'semester1.index',
        'uses'=>'Semester1Controller@index',
        'middleware'=>'checkacl:point-list']);

        Route::get('userindex','Semester1Controller@userindex')->name('semester1.userindex');
        Route::post('userindex','Semester1Controller@userindex')->name('semester1.userindex');

        Route::post('/loadClass','Semester1Controller@loadClass')->name('loadClass');
        Route::post('/loadSubject','Semester1Controller@loadSubject')->name('loadSubject');

        Route::post('save', 'semester1Controller@savediem')->name('semester1.savediem');
        Route::post('datajson', 'semester1Controller@datajson')->name('semester1.datajson');

        Route::get('add',['as'=>'semester1.add',
        'uses'=>'Semester1Controller@add',
        'middleware'=>'checkacl:point-add']);
        Route::post('store',['as'=>'semester1.store',
        'uses'=>'Semester1Controller@store',
        'middleware'=>'checkacl:point-add']);

        Route::get('edit/{id}',['as'=>'semester1.edit',
        'uses'=>'Semester1Controller@edit',
        'middleware'=>'checkacl:point-edit']);
        Route::post('update/{id}',['as'=>'semester1.update',
        'uses'=>'Semester1Controller@update',
        'middleware'=>'checkacl:point-edit']);
            
        Route::get('destroy/{id}','Semester1Controller@destroy')->name('semester1.destroy');
    
        Route::get('/student1/layout', 'Semester1Controller@show')->name('semester1.layout');
    });

    Route::group(['prefix' => 'semester2'], function () {

        Route::get('class','Semester2Controller@class')->name('semester2.class');
        Route::post('class','Semester2Controller@class')->name('semester2.class');

        Route::get('student','Semester2Controller@student')->name('semester2.student');
        Route::post('student','Semester2Controller@student')->name('semester2.student');

        Route::get('add','Semester2Controller@add')->name('semester2.add');
        Route::post('store','Semester2Controller@store')->name('semester2.store');

        Route::get('edit/{id}','Semester2Controller@edit')->name('semester2.edit');
        Route::post('update/{id}','Semester2Controller@update')->name('semester2.update');
            
        Route::get('destroy/{id}','Semester2Controller@destroy')->name('semester2.destroy');

        Route::get('/student1/layout', 'Semester2Controller@show')->name('semester2.layout');
    });

    Route::group(['prefix' => 'position'], function () {
        
        Route::get('index','Teacher\PositionController@index')->name('position.index');
        Route::post('index','Teacher\PositionController@index')->name('position.index');

        Route::get('add','Teacher\PositionController@add')->name('position.add');
        Route::post('store','Teacher\PositionController@store')->name('position.store');

        Route::get('edit/{id}','Teacher\PositionController@edit')->name('position.edit');
        Route::post('update/{id}','Teacher\PositionController@update')->name('position.update');

        Route::get('destroy/{id}','Teacher\PositionController@destroy')->name('position.destroy');
    });

    Route::group(['prefix' => 'academiclevel'], function () {
        
        Route::get('index','Teacher\AcademiclevelController@index')->name('academiclevel.index');
        Route::post('index','Teacher\AcademiclevelController@index')->name('academiclevel.index');

        Route::get('add','Teacher\AcademiclevelController@add')->name('academiclevel.add');
        Route::post('store','Teacher\AcademiclevelController@store')->name('academiclevel.store');

        Route::get('edit/{id}','Teacher\AcademiclevelController@edit')->name('academiclevel.edit');
        Route::post('update/{id}','Teacher\AcademiclevelController@update')->name('academiclevel.update');

        Route::get('destroy/{id}','Teacher\AcademiclevelController@destroy')->name('academiclevel.destroy');
    });

    Route::group(['prefix' => 'technique'], function () {
        
        Route::get('index','Teacher\TechniqueController@index')->name('technique.index');
        Route::post('index','Teacher\TechniqueController@index')->name('technique.index');

        Route::get('add','Teacher\TechniqueController@add')->name('technique.add');
        Route::post('store','Teacher\TechniqueController@store')->name('technique.store');

        Route::get('edit/{id}','Teacher\TechniqueController@edit')->name('technique.edit');
        Route::post('update/{id}','Teacher\TechniqueController@update')->name('technique.update');

        Route::get('destroy/{id}','Teacher\TechniqueController@destroy')->name('technique.destroy');
    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('class/{grade_id}','AjaxConroller@getclass');
    });

});