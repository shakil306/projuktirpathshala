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

Route::get('/', function () {
    return view('welcome');
})->name('index');
// 
Route::get('/checking', function () {
    return view('allcourse');
});

Route::get('/checking2', function () {
    return view('allblog');
});

Route::get('/coupon', 'StudentController@coupon')->name('coupon');

Route::post('token', 'PaymentController@token')->name('token');
Route::get('createpayment', 'PaymentController@createpayment')->name('createpayment');
Route::get('executepayment', 'PaymentController@executepayment')->name('executepayment');
Route::resource('orders', 'OrderController');
Route::get('nagad/pay', 'NagadPaymentController@pay')->name('nagad.pay');
Route::get('nagad/callback', 'NagadPaymentController@callback');
// Route::get('/all-courses', 'FrontendController@allcourse')->name('allcourse');

// change the routes "all-blog" to "all-blog-posts"
Route::get('/all-blog-posts', 'FrontendController@allblog')->name('allblog');
Route::post('/footer-address/{id}', 'FrontendController@footerAddress')->name('footer.address');
Route::post('/footer-whatsapp/{id}', 'FrontendController@footerWhatsApp')->name('footer.whatsapp');

//Payment
Route::get('/pay-now/{id}', 'StudentController@payNow')->name('paynow');
Route::get('/checkout/{id}', 'StudentController@checkout')->name('checkout');

Route::get('/terms-condition', 'FrontendController@termsCondition')->name('terms-condition');
Route::get('/return-refund-policy', 'FrontendController@returnRefundPolicy')->name('return-refund-policy');
Route::get('/privacy-policy', 'FrontendController@privacyPolicy')->name('privacy-policy');
Route::get('/disclaimer', 'FrontendController@disclaimer')->name('disclaimer');

Route::get('/about-us', 'FrontendController@about')->name('about');
Route::get('/courses', 'FrontendController@course')->name('course');
Route::get('/admission', 'FrontendController@admission')->name('admission');
Route::post('/admission', 'FrontendController@admission2')->name('admission2');
Route::get('/team-members', 'FrontendController@mentor')->name('mentor');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/reviews', 'FrontendController@review')->name('review');
Route::get('/gallery', 'FrontendController@gallery')->name('gallery');
Route::get('/seminar', 'FrontendController@seminar')->name('seminar');
Route::get('/social-activity', 'FrontendController@socialActivity')->name('social-activity');
Route::get('/partner', 'FrontendController@partner')->name('partner');
Route::get('/student-feedback', 'FrontendController@studentFeedback')->name('student-feedback');
Route::get('/courses/{id}', 'FrontendController@course_details')->name('course_details');
Route::get('/blogs/{slug}', 'FrontendController@blogdetails')->name('blog-details');
Route::get('/social_activity_details/{id}', 'FrontendController@social_activity_details')->name('social_activity_details');
Route::post('/contact-us', 'FrontendController@contactus')->name('contact-us');
Route::post('/registration', 'FrontendController@registration')->name('registration');
Route::get('/registernow/{id}', 'FrontendController@registernow')->name('registernow');
Route::get('/registerseminar/{id}', 'FrontendController@registerseminar')->name('registerseminar');
Route::post('/consultant', 'FrontendController@consultant')->name('consultant');
Route::get('/checking/{id}', 'FrontendController@checking')->name('checking');

Route::get('/single_course/{id}', 'FrontendController@getSingleCourse');

//Comment
Route::post('/addcomment', 'FrontendController@addcomment')->name('addcomment');

Route::get('/student-login', 'StudentController@studentlogin')->name('student_login');
Route::post('/student/login', 'StudentController@doLogin')->name('logindo');
Route::get('/logout', 'StudentController@logout')->name('logout');

Route::get('/enroll/{id}', 'FrontendController@admissionCourse')->name('admission.course');
Route::post('/admission-course/store', 'FrontendController@admissionCourseStore')->name('course.wise.admission.store');

Route::get('/course-enroll', 'FrontendController@enrollment')->name('enrollment.form');


Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/assign-new', 'AdminController@assignMentor')->name('assign-mentor');
    Route::get('/newdepertment', 'AdminController@newdepertment')->name('newdepertment');
    Route::get('/depertmentlist', 'AdminController@depertmentlist')->name('depertmentlist');
    Route::post('/newdepertment2', 'AdminController@newdepertment2')->name('newdepertment2');
    Route::post('/assign-new2', 'AdminController@assignMentor2')->name('assign-mentor2');
    Route::get('/assigncourse', 'AdminController@assigncourse')->name('assigncourse');
    Route::post('/assign-course2', 'AdminController@assigncourse2')->name('assign-course2');
    Route::get('/assign-course/{id}', 'AdminController@assigncourseEdit')->name('assign-course-edit');
    Route::post('/assign-course-update/{id}', 'AdminController@assigncourseUpdate')->name('assign-course-update');

    Route::get('/mentor-list', 'AdminController@mentorlist')->name('mentorlist');
    Route::get('/writeblog', 'AdminController@writeblog')->name('writeblog');
    Route::post('/writeblog2', 'AdminController@writeblog2')->name('writeblog2');
    Route::get('/slidernew', 'AdminController@newslider')->name('newslider');
    Route::get('/sliders', 'AdminController@sliders')->name('sliders');
    Route::post('/newslider2', 'AdminController@newslider2')->name('newslider2');
    Route::get('/welcomeslider', 'AdminController@welcomeslider')->name('welcomeslider');
    Route::post('/welcomeslider2', 'AdminController@welcomeslider2')->name('welcomeslider2');
    Route::get('/add-image-in-gallery', 'AdminController@addgallery')->name('addgallery');
    Route::post('/add-image-in-gallery2', 'AdminController@addgallery2')->name('addgallery2');
    Route::get('/addseminar', 'AdminController@addseminar')->name('addseminar');
    Route::post('/addseminar2', 'AdminController@addseminar2')->name('addseminar2');
    Route::get('/addworkshop', 'AdminController@addworkshop')->name('addworkshop');
    Route::post('/addworkshop2', 'AdminController@addworkshop2')->name('workshop2');
    Route::get('/mentoredit/{id}', 'AdminController@mentoredit')->name('mentoredit');
    Route::get('/mentoredit3/{id}', 'AdminController@mentoredit3')->name('mentoredit3');
    Route::put('/mentor/{id}/update', 'AdminController@mentorupdate')->name('mentoredit2');
    Route::get('/departmentedit/{id}', 'AdminController@departmentedit')->name('departmentedit');
    Route::put('/departmentedit/{id}/update', 'AdminController@departmentupdate')->name('departmentedit2');
    Route::get('/Course-lis', 'AdminController@courselist')->name('course-list');
    Route::get('/newsocial', 'AdminController@newsocial')->name('newsocial');
    Route::get('/social-activity-index', 'AdminController@socialIndex')->name('social.index');
    Route::get('/social-activity-delete/{id}', 'AdminController@socialActivityDelete')->name('social.activity.delete');
    Route::post('/writesocial2', 'AdminController@writesocial2')->name('writesocial2');
    Route::get('/social-list', 'AdminController@sociallist')->name('social-list');
    Route::get('/newleader', 'AdminController@newleader')->name('newleader');
    Route::post('/newleader2', 'AdminController@newleader2')->name('newleader2');
    Route::get('/leaderlist', 'AdminController@leaderlist')->name('leaderlist');
    Route::get('/leaderedit/{id}', 'AdminController@leaderedit')->name('leaderedit');
    Route::put('/leaderedit2/{id}', 'AdminController@leaderedit2')->name('leaderedit2');
    Route::get('/sliderlist', 'AdminController@sliderlist')->name('sliderlist');
    Route::get('/galleries', 'AdminController@galleries')->name('galleries');
    Route::get('/newbatch', 'AdminController@newbatch')->name('newbatch');
    Route::post('/newbatch2', 'AdminController@newbatch2')->name('newbatch2');
    Route::get('/batchedit/{id}', 'AdminController@batchedit')->name('batchedit');

    Route::post('/batch-update/{id}', 'AdminController@batchUpdate')->name('batch.update');

    Route::get('/partner-create', 'AdminController@partnerCreate')->name('partner.create');
    Route::post('/partner-store', 'AdminController@partnerStore')->name('partner.store');
    Route::get('/partner-list', 'AdminController@partnerList')->name('partner.list');
    Route::get('/partner-delete/{id}', 'AdminController@partnerDelete')->name('partner.delete');

    Route::get('/contact-list', 'AdminController@contactList')->name('contact.list');
    Route::get('/contact-seen', 'AdminController@contactSeen')->name('contact.seen');
    Route::get('/contact-view/{id}', 'AdminController@contactView')->name('admin.contact.show');
    Route::get('/contact-delete/{id}', 'AdminController@contactDelete')->name('admin.contact.delete');

    Route::get('/batch-delete/{id}', 'AdminController@batchDelete')->name('batch-delete');
    Route::get('/runningbatchlist', 'AdminController@runningbatchlist')->name('runningbatchlist');
    Route::get('/studentlist/{id}', 'AdminController@studentlist')->name('studentlist');
    Route::get('/studentlist-feedback2', 'AdminController@studentfeedback2')->name('student-feedback2');
    Route::post('/studentlist-feedback21', 'AdminController@studentfeedback21')->name('student-feedback21');
    Route::get('/seminarlist', 'AdminController@seminarlist')->name('seminarlist');
    Route::get('/workshoplist', 'AdminController@workshoplist')->name('workshoplist');
    Route::get('/completeevent/{id}', 'AdminController@completeevent')->name('completeevent');
    Route::get('/participants/{id}', 'AdminController@participants')->name('participants');

    Route::post('/mentor/delete/{id}', 'AdminController@mentordestroy')->name('mentordelete');
    Route::post('/leader/delete/{id}', 'AdminController@leaderdestroy')->name('leaderdelete');
    Route::get('/complete/{id}', 'AdminController@completebatch')->name('complete');
    Route::get('/complete', 'AdminController@completebatchlist')->name('completebatch');
    Route::get('/eventsdone', 'AdminController@doneevents')->name('eventsdone');
    Route::get('/success-student', 'AdminController@successstudent')->name('Success-Students');
    Route::post('/success-student2', 'AdminController@successstudent2')->name('success-student2');
    Route::put('/socialcover/{id}', 'AdminController@socialcover')->name('socialcover');
    Route::put('/address/{id}', 'AdminController@address')->name('address');
    Route::put('/welcome/{id}/update', 'AdminController@welcomeupdate')->name('welcomeedit');
    Route::put('/videoedit/{id}/update', 'AdminController@videoedit')->name('videoedit');
    Route::put('/svideoedit/{id}/update', 'AdminController@svideoedit')->name('svideoedit');
    Route::put('/aboutedit/{id}/update', 'AdminController@aboutupdate')->name('aboutedit');
    Route::put('/missionedit/{id}', 'AdminController@missionedit')->name('missionedit');
    Route::put('/vissionedit/{id}', 'AdminController@vissionedit')->name('visionedit');
    Route::put('/depertmentedit/{id}', 'AdminController@depertmentedit')->name('depertmentedit');
    Route::put('/phone/{id}', 'AdminController@phone')->name('phone');
    Route::put('/email/{id}', 'AdminController@email')->name('email');
    Route::get('/createmodule/{id}', 'AdminController@createmodule')->name('createmodule');
    Route::post('/createmodule2', 'AdminController@createmodule2')->name('createmodule2');
    Route::get('/requirements/{id}', 'AdminController@requirements')->name('requirements');
    Route::post('/requirements2', 'AdminController@requirements2')->name('requirements2');

    Route::post('/courseedit2/{id}', 'AdminController@courseedit')->name('courseedit2');
    Route::put('/course_overview/{id}', 'AdminController@course_overview')->name('course_overview');
    Route::post('/course_module_edit/{id}', 'AdminController@courseModuleEditA')->name('course.module.edit');
    Route::get('/module/{id}/delete', 'AdminController@moduledelete')->name('moduledelete');
    Route::get('/requirmentdelete/{id}/delete', 'AdminController@requirmentdelete')->name('requirmentdelete');
    Route::put('/blogedit/{id}', 'AdminController@blogedit')->name('blogedit');
    Route::put('/counteredit/{id}/update', 'AdminController@counteredit')->name('counteredit');
    Route::post('/counts/update2/{id}', 'AdminController@counteredit2')->name('counts');

    Route::get('/admin-list', 'AdminController@adminlist')->name('adminlist');
    Route::get('/admin-create', 'AdminController@adminCreate')->name('admin.create');
    Route::post('/admin-store', 'AdminController@adminStore')->name('admin.store');
    Route::get('/admin-edit/{id}', 'AdminController@adminEdit')->name('admin.edit');
    Route::post('/admin-update/{id}', 'AdminController@adminUpdate')->name('admin.update');
    Route::get('/admin-delete/{id}', 'AdminController@adminDelete')->name('admin.delete');


    Route::get('/approveadmin/{id}', 'AdminController@approveadmin')->name('approveadmin');
    Route::get('/blockadmin/{id}', 'AdminController@blockadmin')->name('blockadmin');
    Route::get('/blockc/{id}', 'AdminController@blockc')->name('blockc');
    Route::get('/activec/{id}', 'AdminController@activec')->name('activec');
    Route::get('/all_consult', 'AdminController@all_consult')->name('all_consult');
    Route::get('/consultview/{id}', 'AdminController@consultview')->name('consultview');
    Route::get('/consultdetails/{id}', 'AdminController@consultdetails')->name('consult-details');
    Route::get('/all_message', 'AdminController@all_message')->name('all_message');
    Route::get('/messagedetails/{id}', 'AdminController@messagedetails')->name('messagedetails');

    Route::put('/socialedit/{id}', 'AdminController@socialedit')->name('socialedit');
    Route::post('/othotha/{id}', 'AdminController@othotha')->name('othotha');
    Route::post('/why-chosse-us/{id}', 'AdminController@whyChooseUsHeadingContent')->name('whyChooseUsHeadingContent');
    Route::post('/heading12/{id}', 'AdminController@heading12')->name('heading12');

    Route::get('/facilities', 'AdminController@facilities')->name('facilities');
    Route::get('/why_us', 'AdminController@why_us')->name('why_us');
    Route::get('/facilityedit/{id}', 'AdminController@facilityedit')->name('facilityedit');
    Route::put('/facilityedit2/{id}', 'AdminController@facilityedit2')->name('facilityedit2');
    Route::get('/whyusedit/{id}', 'AdminController@whyusedit')->name('whyusedit');
    Route::put('/whyusedit2/{id}', 'AdminController@whyusedit2')->name('whyusedit2');
    Route::get('/sliderdelete/{id}/delete', 'AdminController@sliderdelete')->name('sliderdelete');

    Route::get('/galleryEdit/{id}/edit', 'AdminController@galleryEdit')->name('galleryEdit');
    Route::post('/updateGalleryImage/{id}/update', 'AdminController@updateGalleryImage')->name('updateGalleryImage');

    Route::get('/gallerydelete/{id}/delete', 'AdminController@gallerydelete')->name('gallerydelete');
    Route::get('/messageview/{id}/', 'AdminController@messageview')->name('messageview');
    Route::get('/messageview/{id}/', 'AdminController@messageview')->name('messageview');
    Route::get('/wsliderlist', 'AdminController@wsliderlist')->name('wsliderlist');

    Route::get('/wsliderEdit/{id}/edit', 'AdminController@wsliderEdit')->name('wsliderEdit');
    Route::post('/wsliderUpdate/{id}/update', 'AdminController@wsliderUpdate')->name('wsliderUpdate');

    Route::get('/wsliderdelete/{id}/delete', 'AdminController@wsliderdelete')->name('wsliderdelete');

    Route::get('/pagetitle', 'AdminController@pagetitle')->name('pagetitle');

    Route::get('/pagetitle/{id}', 'AdminController@titleedit')->name('titleedit');
    Route::put('/titleedit2/{id}', 'AdminController@titleedit2')->name('titleedit2');
    Route::get('/sister-concern', 'AdminController@sisterconcern')->name('sisterconcern');
    Route::get('/addsister', 'AdminController@addsister')->name('addsister');
    Route::post('addsister2', 'AdminController@addsister2')->name('addsister2');
    Route::get('/sisteredit/{id}', 'AdminController@sisteredit')->name('sisteredit');
    Route::put('/sisteredit2/{id}', 'AdminController@sisteredit2')->name('sisteredit2');
    Route::get('/sister/{id}/delete', 'AdminController@sisterdelete')->name('sisterdelete');
    Route::get('/logo', 'AdminController@logo')->name('logo');
    Route::get('/logoedit/{id}', 'AdminController@logoedit')->name('logoedit');
    Route::put('/logoedit2/{id}', 'AdminController@logoedit2')->name('logoedit2');
    Route::get('/sociallist', 'AdminController@sociallist')->name('sociallist');
    Route::get('/newlink', 'AdminController@newlink')->name('newlink');
    Route::post('newlink2', 'AdminController@newlink2')->name('newlink2');
    Route::get('/linkedit/{id}', 'AdminController@linkedit')->name('linkedit');
    Route::put('/linkedit2/{id}', 'AdminController@linkedit2')->name('linkedit2');
    Route::get('/linkdelete/{id}/delete', 'AdminController@linkdelete')->name('linkdelete');
    Route::get('/editprofile', 'AdminController@editprofile')->name('editprofile');
    Route::put('/editprofile2/{id}', 'AdminController@editprofile2')->name('editprofile2');
    Route::get('/editpassword', 'AdminController@editpassword')->name('editpassword');
    Route::put('/location/{id}', 'AdminController@location')->name('location');
    Route::get('/s-student', 'AdminController@s_students')->name('s_students');
    Route::get('/successedit/{id}', 'AdminController@successedit')->name('successedit');
    Route::put('/success-edit2/{id}', 'AdminController@successedit2')->name('success-edit2');
    Route::get('feedback-list', 'AdminController@feedbacklist')->name('feedbacklist');
    Route::get('/fedit/{id}', 'AdminController@fedit')->name('fedit');
    Route::get('/fdelete/{id}', 'AdminController@fdelete')->name('fdelete');
    Route::put('/fedit2/{id}', 'AdminController@fedit2')->name('fedit2');
    Route::get('/success/{id}/delete', 'AdminController@successdestroy')->name('successdelete');
    Route::get('/f/{id}/delete', 'AdminController@fdestroy')->name('fdelete');
    Route::get('/change-password', 'AdminController@change_password')->name('change_password');
    Route::post('/update-password', 'AdminController@update_password')->name('update_password');

    //Demo Design update

    Route::put('/copyright/{id}', 'AdminController@copyright')->name('copyright');
    Route::put('/headingedit/{id}', 'AdminController@headingedit')->name('headingedit');

    //Route for Menu
    Route::get('/admin/menu/manage', 'AdminController@menu_index')->name('menu.index');
    Route::post('/admin/menu/store', 'AdminController@menu_store')->name('menu.store');
    Route::post('/admin/menu/destroy/{id}', 'AdminController@menu_destroy')->name('menu.destroy');
    Route::post('/admin/menu/update/{id}', 'AdminController@menu_update')->name('menu.update');
    Route::put('/eventedit/{id}', 'AdminController@eventedit')->name('eventedit');

    //Admission
    Route::get('/admission-list', 'AdminController@admissionList')->name('admission.list');
    Route::get('/admission-list-delete/{id}', 'AdminController@admissionDelete')->name('admission-delete');

    //payment
    Route::get('/payment-complete', 'AdminController@p_done')->name('p_done');
    Route::get('/payment-pendings', 'AdminController@p_pending')->name('p_pending');

    //Student Profile
    Route::get('/student_profile/{id}', 'AdminController@student_profile')->name('student_profile');


    Route::get('/google-facebook-reviews', 'AdminController@googleFacebookReviews')->name('google.facebook.review');
    Route::post('/google-facebook-reviews-store/{id}', 'AdminController@googleFacebookReviewsStore')->name('reviews.store');


    //Route for SubMenu
    Route::get('/admin/submenu/manage', 'AdminController@submenu_index')->name('submenu.index');
    Route::post('/admin/submenu/store', 'AdminController@submenu_store')->name('submenu.store');
    Route::post('/admin/submenu/destroy/{id}', 'AdminController@submenu_destroy')->name('submenu.destroy');
    Route::post('/admin/submenu/update/{id}', 'AdminController@submenu_update')->name('submenu.update');
    Route::get('/meta-key', 'AdminController@metakey')->name('metakey');
    Route::put('/meta-key/{id}', 'AdminController@metakeyup')->name('metakeyup');
    Route::get('/Google-Analytic', 'AdminController@analytic')->name('analytic');
    Route::put('/analytic2/{id}', 'AdminController@analytic2')->name('analytic2');

    Route::get('/export-excel', 'AdminController@ExportIntoExcel')->name('excel');
    Route::get('/export-csv', 'AdminController@exportIntoCSV')->name('csv');

    Route::get('/rexport-excel', 'AdminController@rExportIntoExcel')->name('rexcel');
    Route::get('/rexport-csv', 'AdminController@rexportIntoCSV')->name('rcsv');

    Route::get('/pexport-excel', 'AdminController@pExportIntoExcel')->name('pexcel');
    Route::get('/pexport-csv', 'AdminController@pexportIntoCSV')->name('pcsv');
    Route::get('/departmentblock/{id}', 'AdminController@departmentblock')->name('departmentblock');
    Route::get('/departmentactive/{id}', 'AdminController@departmentactive')->name('departmentactive');
    Route::get('/bloglist', 'AdminController@bloglist')->name('bloglist');
    Route::get('/delete-blog/{id}', 'AdminController@deleteBlog')->name('delete-blog');
    Route::get('/comments/{id}', 'AdminController@pcomment')->name('pcomment');
    Route::get('/comments-pending/{id}', 'AdminController@commentsPending')->name('comments-pending');
    Route::get('/comments-delete/{id}', 'AdminController@commentsDelete')->name('comments-delete');
    Route::get('/acomment/{id}', 'AdminController@acomment')->name('acomment');

    Route::get('/student/profile/{id}', 'AdminController@st_pro')->name('st_pro');

    //Student Profile
    Route::get('/profile', 'StudentController@profile')->name('profile');


    //coupon
    Route::get('/coupon-list', 'AdminController@coupon')->name('acoupon');




    Route::get('reset-password', 'StudentController@resetPassword')->name('resetpassword');

    //search
    Route::get('/search', 'AdminController@search')->name('search');
    Route::get('/admission-student-search', 'AdminController@admissionStudentSearch')->name('admission.student.search');
    Route::get('/page-search', 'AdminController@pageSearch')->name('pages.search');
    Route::get('/pay-now1/{id}', 'AdminController@payNow1')->name('paynow1');

    //coupon

    Route::get('/dcoupon/{id}', 'AdminController@coupon_destroy')->name('dcoupon');
    Route::post('/ucoupon/{id}', 'AdminController@coupon_update')->name('ucoupon');
    Route::post('/addcoupon', 'AdminController@addcoupon')->name('addcoupon');


    Route::get('/career-counseling', 'AdminController@careerCoundseling')->name('career-counseling');
    Route::post('/career-counseling-store', 'AdminController@storeCareerCounseling')->name('career-counseling.store');
    Route::post('/career-counseling-update-{id}', 'AdminController@updateCareerCounseling')->name('career-counseling.update');
    Route::get('/career-counseling-edit-{id}', 'AdminController@editCareerCounseling')->name('career-counseling.edit');
});


// For SEO
// Route::redirect('/all-blog', '/blog', 301);

Route::redirect('/web-development-with-php-uttora-dhaka/', '/courses/advanced-web-development', 301);
Route::redirect('/courses/office-application', '/courses/office-application', 301);
Route::redirect('/digital-marketing-course-outline/', '/courses/professional-digital-marketing', 301);
Route::redirect('/wordpress-theme-customization-uttora-dhaka-2/', '/', 301);
Route::redirect('/courses/advanced-web-development', '/courses/advanced-web-development', 301);
Route::redirect('/web-maintenance-uttora-dhaka/', '/courses/responsive-web-design', 301);
Route::redirect('/courses/advance-affiliate-marketing', '/courses/advance-affiliate-marketing', 301);
Route::redirect('/blog-details/important-fact-about-seo', '/blogs/important-fact-about-seo', 301);
Route::redirect('/blog-details/5', '/blog', 301);
Route::redirect('/courses/advanced-seo-course-training-center-in-dhaka-bangladesh', '/courses/advanced-seo-course-training-center-in-dhaka-bangladesh', 301);
Route::redirect('/our-gallery/26907029_180524996036097_2622121182447002632_n/', '/gallery', 301);
Route::redirect('/member/rasel-howlader/', '/team-members', 301);
Route::redirect('/wpmp_footer_vc_pt/main-footer/', '/', 301);
Route::redirect('/public/uploads/gallery/20221207101231.Projuktir Pathshala Institute (40).webp', '/public/uploads/gallery/20221221071208.Image-07---Copy.webp', 301);
Route::redirect('/category/uncategorized/', '/courses', 301);
Route::redirect('/courses/pgraphics-design-with-clipping-pathp', '/courses/graphics-design-with-clipping-path', 301);
Route::redirect('/course-dates/', '/courses', 301);
Route::redirect('/apps-development-course/', '/courses', 301);
Route::redirect('/ডিজিটাল-মার্কেটিং-এর-প্র/', '/blogs/importance-of-digital-marketing', 301);
Route::redirect('/smm-uttora-dhaka/', '/courses/social-media-marketing', 301);
Route::redirect('/course_details/14', '/courses', 301);
Route::redirect('/course_details/19', '/courses', 301);
Route::redirect('/courses/professional-graphics-design', '/courses/professional-graphics-design', 301);
Route::redirect('/public/uploads/gallery/20221207101210.Projuktir Pathshala Institute (27).webp', '/public/uploads/gallery/20221221071248.Image-06.webp', 301);
Route::redirect('/blog-details/why-graphic-design-is-important', '/blogs/why-graphic-design-is-important', 301);
Route::redirect('/courses/professional-graphics-design-with-clipping-path', '/courses/graphics-design-with-clipping-path', 301);
Route::redirect('/courses/wordpress-customization', '/', 301);
Route::redirect('/courses/responsive-web-design', '/courses/responsive-web-design', 301);
Route::redirect('/courses/professional-digital-marketing', '/courses/professional-digital-marketing', 301);
Route::redirect('/all-courses', '/courses', 301);
Route::redirect('/faq/curabitur-eget-leo-at-velit-imperdiet-viaculis-vitaes/', '/', 301);
Route::redirect('/public/uploads/gallery/20221207091200.Projuktir Pathshala Institute (6).webp', '/public/uploads/gallery/20221221071236.Image-04.webp', 301);
Route::redirect('/author/projuktir2016/feed/', '/blog', 301);
Route::redirect('/public/uploads/gallery/20221207101254.Projuktir Pathshala Institute (24).webp', '/public/uploads/gallery/20221221071227.Image-02.webp', 301);
Route::redirect('/public/uploads/gallery/20221207101246.Projuktir Pathshala Institute (23).webp', '/public/uploads/gallery/20221221071211.Copy%20of%20WW03.webp', 301);
Route::redirect('/home/5-best-seo-tools-1/', '/blogs/important-fact-about-seo', 301);
Route::redirect('/embed/', '/', 301);
Route::redirect('/public/uploads/gallery/20221207101230.Projuktir Pathshala Institute (31).webp', '/public/uploads/gallery/20221221071204.Copy%20of%20Image-09.webp', 301);
Route::redirect('/mentors', '/team-members', 301);
Route::redirect('/public/uploads/gallery/20221207091233.Projuktir Pathshala Institute (4).webp', '/public/uploads/gallery/20221221071222.Copy%20of%20WW02.webp', 301);
Route::redirect('/our-gallery/', '/gallery', 301);
Route::redirect('/web-design-training-in-uttara-dhaka/attachment/1/', '/blogs/sustainable-market-in-web-development', 301);
Route::redirect('/courses/social-media-marketing', '/courses/social-media-marketing', 301);
Route::redirect('/public/uploads/gallery/20221207101219.Projuktir Pathshala Institute (30).webp', '/public/uploads/gallery/20221221071254.Copy%20of%20WW01.webp', 301);
Route::redirect('/wpmp_footer_vc_pt/', '/about-us', 301);
Route::redirect('/courses/professional-graphics-design', '/courses/professional-graphics-design', 301);
Route::redirect('/public/uploads/gallery/20221207101202.Projuktir Pathshala Institute (25).webp', '/public/uploads/gallery/20221221071245.Copy%20of%20Image-13.webp', 301);
Route::redirect('/single_course/', '/courses', 301);
Route::redirect('/blog-details/10', '/blog', 301);
Route::redirect('/feed/', '/', 301);
Route::redirect('/register-form/', '/admission', 301);
Route::redirect('/blog-details/graphics-designer-are-earning-a-lot', '/blogs/why-graphic-design-is-important', 301);
Route::redirect('/seo-uttora-dhaka/', '/courses/advanced-seo-course-training-center-in-dhaka-bangladesh', 301);
Route::redirect('/about', '/about-us', 301);
Route::redirect('/category/categories/seo/amp/', '/blogs/important-fact-about-seo', 301);


// SSLCOMMERZ Start
Route::get('/checkout', 'SslCommerzPaymentController@exampleEasyCheckout')->name('checkout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');

// last update bellow  2/18/2026
Route::get('/create-student', function () {
    return 'student added';
});

//SSLCOMMERZ END
