<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Exports\AdmissionExport;
use App\Exports\RstudentExport;
use App\Exports\pstudentExport;
use App\Models\Review;
use Excel;
use App\Models\Coupon;
use App\Models\Slider;
use App\Models\Count;
use App\Models\Comment;
use App\Models\About;
use App\Models\Menu;
use App\Models\Othotha;
use App\Models\Logo;
use App\Models\Course_module;
use App\Models\Event;
use App\Models\Heading;
use App\Models\Analytic;
use App\Models\Consult;
use DB;
use Hash;
use App\User;
use App\Models\Copyright;
use App\Models\Design1;
use App\Models\Design2;
use App\Models\Submenu;
use App\Models\Social_link;
use App\Models\Our_sister_concern;
use App\Models\Title;
use App\Models\Registration;
use App\Models\Welcome_slide;
use App\Models\Course;
use App\Models\Facility;
use App\Models\Why_us;
use App\Models\Meta_keyword;
use App\Models\Contact;
use App\Models\Requirment;
use App\Models\Success_student;
use App\Models\Batch;
use App\Models\Mentor;
use App\Models\Student_feedback;
use App\Models\Admission;
use App\Models\Social_activity;
use App\Models\Social_cover;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Contact_us;
use App\Models\Video;
use App\Models\Location;
use App\Models\Welcome;
use App\Models\Partner;
use App\Models\CareerCounseling;
use App\Models\Future_leader;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    public function ExportIntoExcel()
    {
        return Excel::download(new AdmissionExport, 'students.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new AdmissionExport, 'students.csv');
    }

    public function rExportIntoExcel()
    {
        return Excel::download(new RstudentExport, 'students.xlsx');
    }

    public function rexportIntoCSV()
    {
        return Excel::download(new RstudentExport, 'students.csv');
    }

    public function pExportIntoExcel()
    {
        return Excel::download(new PstudentExport, 'students.xlsx');
    }

    public function pexportIntoCSV()
    {
        return Excel::download(new PstudentExport, 'students.csv');
    }

    public function assignMentor()
    {
        $departments = Department::where('status', 'active')->get();
        return view('admin.assign-form', compact('departments'));
    }

    public function newdepertment()
    {
        return view('admin.newdepertment');
    }

    public function depertmentlist()
    {
        $all_depertments = Department::get();
        return view('admin.depertmentlist', compact('all_depertments'));
    }

    public function newdepertment2(Request $request)
    {
        $file_name = '';
        if ($request->hasFile('image')) {

            $department = $request->file('image');
            if ($department->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $department->getClientOriginalName();
                //store into directory
                $department->storeAs('department', $file_name);
            }
        }

        Department::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => "active",
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Department Assigned Successfully.');
    }

    public function assignMentor2(Request $request)
    {
        $file_name = '';
        if ($request->hasFile('profile_image')) {

            $mentor = $request->file('profile_image');
            if ($mentor->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $mentor->getClientOriginalName();
                //store into directory
                $mentor->storeAs('mentor', $file_name);
            }
        }

        Mentor::create([
            'name' => $request->name,
            'role' => "Mentor",
            'description' => 'N/A',
            'department' => $request->department,
            'email' => Str::random(6),
            'facebook' => 'N/A',
            'twitter' => 'N/A',
            'linkedin' => 'N/A',
            'profile_image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Mentor Assigned Successfully.');
    }

    public function mentorlist()
    {
        $all_mentors = Mentor::get();
        return view('admin.mentor-list', compact('all_mentors'));
    }

    public function courselist()
    {
        $all_course = Course::get();
        return view('admin.course-list', compact('all_course'));
    }

    public function assigncourse()
    {
        $departments = Department::where('status', 'active')->get();
        return view('admin.newcourse', compact('departments'));
    }

    public function assigncourse2(Request $request)
    {
        $file_name = '';
        if ($request->hasFile('image')) {

            $course = $request->file('image');
            if ($course->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $course->getClientOriginalName();
                //store into directory
                $course->storeAs('course', $file_name);
            }
        }

        $request->validate([
            'title' => 'required|unique:courses,title'
        ]);

        Course::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'department' => $request->department_name,
            'total_classes' => $request->t_class,
            'description' => $request->description,
            'discount' => $request->discount,
            'duration' => $request->duration,
            'course_fee' => $request->fee,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Course Assigned Successfully.');

    }

    public function assigncourseEdit($id){
        $edit = Course::find($id);
        $departments = Department::where('status', 'active')->get();
        return view('admin.edit-course', compact('departments','edit'));
    }
    public function assigncourseUpdate(Request $request, $id){
        if ($request->hasFile('image')) {
            $course = $request->file('image');
            if ($course->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $course->getClientOriginalName();
                //store into directory
                $course->storeAs('course', $file_name);
            }
            Course::find($id)->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'department' => $request->department_name,
                'total_classes' => $request->t_class,
                'description' => $request->description,
                'discount' => $request->discount,
                'duration' => $request->duration,
                'course_fee' => $request->fee,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keyword' => $request->meta_keyword,
                'image' => $file_name
            ]);
        } else {
            Course::find($id)->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'department' => $request->department_name,
                'total_classes' => $request->t_class,
                'description' => $request->description,
                'discount' => $request->discount,
                'duration' => $request->duration,
                'course_fee' => $request->fee,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keyword' => $request->meta_keyword,
            ]);
        }
        return back()->with('message', 'Data is Update');
    }

    public function writeblog()
    {
        return view('admin.writeblog');
    }

    public function writeblog2(Request $request)
    {
//        dd($request->all());
        $file_name = '';
        if ($request->hasFile('image')) {

            $blog = $request->file('image');
            if ($blog->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $blog->getClientOriginalName();
                //store into directory
                $blog->storeAs('blog', $file_name);
            }
        }
        $name = User::find($request->author);
//        dd($name);

        $request->validate([
            'title' => 'required|unique:blogs,title'
        ]);

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'auther_id' => $request->author,
            'name' => $name->name,
            'description' => $request->description,
            'viewed' => 0,
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Blog Published Successfully.');
    }

    public function newslider()
    {
        return view('admin.welcome-slider');
    }

    public function newslider2(Request $request)
    {
        $file_name = '';
        if ($request->hasFile('slider_image')) {

            $slider = $request->file('slider_image');
            if ($slider->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $slider->getClientOriginalName();
                //store into directory
                $slider->storeAs('slider', $file_name);
            }
        }

        Slider::create([
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Slider Added.');
    }

    public function sliderlist()
    {
        $sliders=Slider::get();

        return view('admin.slider', compact('sliders'));
    }

    public function galleries()
    {
        $galleries=Gallery::get();

        return view('admin.galleryimages', compact('galleries'));
    }

    public function welcomeslider()
    {
        return view('admin.welcome-slider');
    }

    public function welcomeslider2(Request $request)
    {
        $file_name = '';
        if ($request->hasFile('slider_image')) {

            $welcome = $request->file('slider_image');
            if ($welcome->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $welcome->getClientOriginalName();
                //store into directory
                $welcome->storeAs('welcome', $file_name);
            }
        }

        Welcome_slide::create([
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Slider Added.');
    }

    public function addgallery()
    {
        return view('admin.new-gallery-image');
    }

    public function addgallery2(Request $request)
    {
        $file_name = '';
        if ($request->hasFile('gallery_image')) {

            $gallery = $request->file('gallery_image');
            if ($gallery->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $gallery->getClientOriginalName();
                //store into directory
                $gallery->storeAs('gallery', $file_name);
            }
        }

        Gallery::create([
            'category' => $request->category,
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Slider Added.');
    }

    public function updateGalleryImage(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $course = $request->file('image');
            if ($course->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $course->getClientOriginalName();
                //store into directory
                $course->storeAs('gallery', $file_name);
            }
            Gallery::find($id)->update([
                'category' => $request->category,
                'alt' => $request->alt,
                'image' => $file_name
            ]);
        } else {
            Gallery::find($id)->update([
                'category' => $request->category,
                'alt' => $request->alt,
            ]);
        }
        return back()->with('message', 'Data is Update');
    }

    public function addseminar()
    {

        return view('admin.addevents');
    }

    public function addseminar2(Request $request)
    {
        $file_name = '';
        if ($request->hasFile('image')) {

            $event = $request->file('image');
            if ($event->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $event->getClientOriginalName();
                //store into directory
                $event->storeAs('event', $file_name);
            }
        }


        $request->validate([
            'title' => 'required|unique:events,title'
        ]);

        Event::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'date' => $request->date,
            's_time' => $request->time,
            'e_time' => $request->end_time,
            'status' => "Active",
            'image'=>$file_name

        ]);
        return redirect()->back()->with('message', 'Event Added.');
    }

    public function mentoredit($id)
    {
        $departments = Department::where('status', 'active')->get();

        $mentor = Mentor::find($id);
        return view('admin.mentor-edit', compact('mentor', 'departments'));
    }

    public function mentoredit3($id)
    {
        $departments = Department::where('status', 'active')->get();

        $mentor = Mentor::find($id);
        return view('admin.mentor_edit2', compact('mentor', 'departments'));
    }

    public function departmentedit($id)
    {
        $department = Department::find($id);
        return view('admin.department-edit', compact('department'));
    }
    public function mentorupdate(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $mentor = $request->file('image');
            if ($mentor->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $mentor->getClientOriginalName();
                //store into directory
                $mentor->storeAs('mentor', $file_name);
            }
            Mentor::find($id)->update([
                'name' => $request->name,
                'role' => "Mentor",
                'description' => 'N/A',
                'department' => $request->department,
                'facebook' => 'N/A',
                'twitter' => 'N/A',
                'linkedin' => 'N/A',
                'profile_image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Mentor::find($id)->update([
                'name' => $request->name,
                'role' => "Mentor",
                'description' => 'N/A',
                'department' => $request->department,
                // 'email' => 'N/A',
                'facebook' => 'N/A',
                'twitter' => 'N/A',
                'linkedin' => 'N/A',
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function departmentupdate(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $department = $request->file('image');
            if ($department->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $department->getClientOriginalName();
                //store into directory
                $department->storeAs('department', $file_name);
            }
            Department::find($id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'status' => "active",
                'image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Department::find($id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'status' => "active",

                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }
        return redirect('/depertmentlist')->with('message', 'Data is Update');
    }

    public function socialIndex(){
        $social_activities= Social_activity::orderBy('id','desc')->paginate(5);
//        dd($social_activities);
        return view('admin.social-activity-list',compact('social_activities'));
    }
    public function socialActivityDelete($id){
        $del = Social_activity::find($id);
        $del->delete();
        return redirect()->back()->with('message', 'Data Deleted Successfully.');
    }

    public function newsocial()
    {
        return view('admin.writesocial-blog');
    }

    public function writesocial2(Request $request)
    {
        $file_name = '';
        if ($request->hasFile('image')) {

            $social = $request->file('image');
            if ($social->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $social->getClientOriginalName();
                //store into directory
                $social->storeAs('social', $file_name);
            }
        }

        $request->validate([
            'title' => 'required|unique:social_activities,title'
        ]);

        Social_activity::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            't_view'=>0,
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Published Successfully.');
    }

    public function newleader()
    {
        return view('admin.newleader');
    }

    public function newleader2(Request $request)
    {

        $file_name = '';
        if ($request->hasFile('profile_image')) {

            $leader = $request->file('profile_image');
            if ($leader->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $leader->getClientOriginalName();
                //store into directory
                $leader->storeAs('leader', $file_name);
            }
        }

        Future_leader::create([
            'name' => $request->name,
            'role' => $request->role,
            'priority' => $request->priority,
            'description' => $request->description,
            'institute' => $request->institute,
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function welcomeupdate(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $welcome = $request->file('img');
            if ($welcome->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $welcome->getClientOriginalName();
                //store into directory
                $welcome->storeAs('welcome', $file_name);
            }
            Welcome::find($id)->update([
                'description' => $request->description,
                'title' => $request->heading,
                'alt' => $request->alt,
                'image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Welcome::find($id)->update([
                'title' => $request->heading,
                'alt' => $request->alt,
                'description' => $request->description,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function videoedit(Request $request, $id)
    {
        Video::find($id)->update([
            'description' => $request->description,
            'heading' => $request->heading,
            'url'=> $request->url
            /* 'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back()->with('message', 'Data is Update');
    }


    public function svideoedit(Request $request, $id)
    {
        Video::find($id)->update([
            'heading' => $request->heading,
            'description' => $request->description,
            'url'=> $request->url
            /* 'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function aboutupdate(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $about = $request->file('img');
            if ($about->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $about->getClientOriginalName();
                //store into directory
                $about->storeAs('about', $file_name);
            }
            About::find($id)->update([
                'title'=>$request->title,
                'description' => $request->description,
                'alt' => $request->alt,
                'image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            About::find($id)->update([
                'title'=>$request->title,
                'description' => $request->description,
                'alt' => $request->alt,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function missionedit(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $about = $request->file('img');
            if ($about->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $about->getClientOriginalName();
                //store into directory
                $about->storeAs('about', $file_name);
            }
            About::find($id)->update([
                'm_head' => $request->m_head,
                'mission' => $request->mission,
                'mission_image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            About::find($id)->update([
                'm_head' => $request->m_head,
                'mission' => $request->mission,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function vissionedit(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $about = $request->file('img');
            if ($about->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $about->getClientOriginalName();
                //store into directory
                $about->storeAs('about', $file_name);
            }
            About::find($id)->update([
                'v_head' => $request->v_head,
                'vission' => $request->vission,
                'vission_image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            About::find($id)->update([
                'v_head' => $request->v_head,
                'vission' => $request->vission,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function socialcover(Request $request, $id)
    {

            $social = $request->file('img');
            if ($social->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $social->getClientOriginalName();
                //store into directory
                $social->storeAs('social', $file_name);
            }
            Social_cover::find($id)->update([

                'image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function depertmentedit(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $department = $request->file('img');
            if ($department->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $department->getClientOriginalName();
                //store into directory
                $department->storeAs('department', $file_name);
            }
            Department::find($id)->update([
                'description' => $request->description,
                'alt' => $request->alt,
                'image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Department::find($id)->update([
                'description' => $request->description,
                'alt' => $request->alt,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function leaderlist()
    {
        $leaders=Future_leader::orderBy('id','DESC')->get();
        return view('admin.leaderlist', compact('leaders'));
    }

    public function leaderedit($id)
    {
        $leader = Future_leader::find($id);
        return view('admin.leaderedit', compact('leader'));
    }

    public function leaderedit2(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $leader = $request->file('image');
            if ($leader->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $leader->getClientOriginalName();
                //store into directory
                $leader->storeAs('leader', $file_name);
            }
            Future_leader::find($id)->update([
            'name' => $request->name,
            'alt' => $request->alt,
            'role' => $request->role,
            'description' => $request->description,
            'institute' => $request->institute,
            'image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Future_leader::find($id)->update([
                'name' => $request->name,
                'alt' => $request->alt,
                'role' => $request->role,
                'description' => $request->description,
                'institute' => $request->institute,

            ]);
        }

        return redirect('/leaderlist')->with('message', 'Data is Update');
    }

    public function phone(Request $request, $id)
    {
        Contact::find($id)->update([
            'phone' => $request->number,

            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect('/contact');
    }

    public function email(Request $request, $id)
    {
        Contact::find($id)->update([
            'email' => $request->email,

            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect('/contact');
    }

    public function address(Request $request, $id)
    {
        Contact::find($id)->update([
            'address' => $request->address,

            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect('/contact');
    }

    public function newbatch()
    {
        $courses=Course::get();
        return view('admin.newbatch', compact('courses'));
    }

    public function newbatch2(Request $request)
    {
        $course = Course::find($request->course_id);
//        dd($course);
        $request->validate([
            'image' => 'mimes:jpeg,jpg,png',
        ]);

        $file_name = '';
        if ($request->hasFile('image')) {

            $batch = $request->file('image');
            if ($batch->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $batch->getClientOriginalName();
                //store into directory
                $batch->storeAs('batch', $file_name);
            }
        }

        $request->validate([
            'course_name' => 'required|unique:batches,course_name'
        ]);

        Batch::create([
            'course_name' => $request->course_name,
            'slug' => Str::slug($request->course_name),
            'course_id' => $course->id,
            'last_date' => $request->l_date,
            'status' => "active",
            'fee' => $course->course_fee,
            'duration' =>$course->duration,
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function runningbatchlist()
    {
        $all_batch = Batch::where('status',"active")->get();
        return view('admin.batchlist', compact('all_batch'));
    }

    public function batchedit($id){
        $batch = Batch::find($id);
        $courses=Course::get();
        return view('admin.batch-edit',compact('batch','courses'));
    }

    public function batchUpdate(Request $request, $id){
        $batch = Batch::find($id);
        $course = Course::find($request->course_id);
        if ($request->hasFile('image')) {
            $department = $request->file('image');
            if ($department->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $department->getClientOriginalName();
                //store into directory
                $department->storeAs('batch', $file_name);
            }
            $batch->update([
                'course_name' => $request->name,
                'course_id' => $course->id,
                'last_date' => $request->l_date,
                'status' => "active",
                'fee' => $course->course_fee,
                'duration' =>$course->duration,
                'alt' =>$request->alt,
                'image' => $file_name
            ]);
        }else{
            $batch->update([
                'course_name' => $request->name,
                'course_id' => $course->id,
                'last_date' => $request->l_date,
                'status' => "active",
                'fee' => $course->course_fee,
                'duration' =>$course->duration,
                'alt' =>$request->alt,
            ]);
        }

        return redirect()->back()->with('message', 'Data Updated Successfully.');
    }

    public function batchDelete($id){
        $batch = Batch::find($id);
        $batch->delete();
        return back()->with('message', 'Data is delete Successfully');
    }

    public function completebatchlist()
    {
        $all_batch = Batch::where('status',"complete")->get();
        return view('admin.batchlist', compact('all_batch'));
    }

    public function studentlist($id)
    {
        $batch=Batch::find($id);
        $students=Admission::where('course_duration', $id)->paginate(25);
        return view('admin.studentlist', compact('students','batch'));
    }

    public function studentfeedback2()
    {
        $departments=Department::get();
        return view('admin.studentfeedback', compact('departments'));
    }

    public function studentfeedback21(Request $request)
    {

        $file_name = '';
        if ($request->hasFile('image')) {

            $feedback = $request->file('image');
            if ($feedback->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $feedback->getClientOriginalName();
                //store into directory
                $feedback->storeAs('feedback', $file_name);
            }
        }

        Student_feedback::create([
            'name' => $request->name,
            'departmeent' => $request->department,
            'description' => $request->description,
            'priority' => $request->priority,
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function seminarlist()
    {
        $events=Event::where('category',"Seminar")->where('status',"Active")->orderBy('id','DESC')->get();
        return view('admin.eventlist', compact('events'));
    }

    public function workshoplist()
    {
        $events=Event::where('category',"Workshop")->where('status',"Active")->orderBy('id','DESC')->get();
        return view('admin.eventlist', compact('events'));
    }

    public function participants($id)
    {
        $event=Event::find($id);
        $registration=Registration::where('event_category', $id)->get();
        return view('admin.participants', compact('registration','event'));
    }

    public function mentordestroy($id)
    {
        $mentor=Mentor::find($id);
        $mentor->delete();
        return redirect('/mentor-list')->with('message', 'Data is delete Successfully');
    }

    public function successdestroy($id)
    {
        $mentor=Success_student::find($id);
        $mentor->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }

    public function fdestroy($id)
    {
        $mentor=Student_feedback::find($id);
        $mentor->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }

    public function leaderdestroy($id)
    {
        $leader=Future_leader::find($id);
        $leader->delete();
        return redirect('/leaderlist')->with('message', 'Data is delete Successfully');
    }

    public function completebatch($id)
    {

        Admission::where('course_duration', $id)->update([
            "status"=> "Success"
            /*'updated_by'=>auth()->user()->id*/
        ]);


            Batch::find($id)->update([
                "status"=> "complete"
                /*'updated_by'=>auth()->user()->id*/
            ]);
        return redirect('/runningbatchlist')->with('message', 'Data is Update');
    }

    public function completeevent($id)
    {
        Event::find($id)->update([
            "status"=> "Complete"
            /*'updated_by'=>auth()->user()->id*/
        ]);
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function doneevents()
    {
        $events = Event::where('status',"Complete")->orderBy('id','DESC')->get();
        return view('admin.eventlist', compact('events'));
    }

    public function successstudent()
    {
        return view('admin.successstudent');
    }

    public function successstudent2(Request $request)
    {

        $file_name = '';
        if ($request->hasFile('image')) {

            $success = $request->file('image');
            if ($success->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $success->getClientOriginalName();
                //store into directory
                $success->storeAs('success', $file_name);
            }
        }

        Success_Student::create([
            'name' => $request->name,
            'priority' => $request->priority,
            'description' => $request->description,
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function createmodule($id)
    {
        $course=Course::where('id', $id)->first();
        return view('admin.createmodule', compact('course'));
    }

    public function requirements($id)
    {
        $course=Course::where('id', $id)->first();
        return view('admin.requirements', compact('course'));
    }

    public function createmodule2(Request $request)
    {
        Course_module::create([
            'course_idname' => $request->name,
            'course_id' => $request->id
        ]);
        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function requirements2(Request $request)
    {
        Requirment::create([
            'requirment' => $request->name,


            'course_id' => $request->id
        ]);
        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function courseedit(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $course = $request->file('image');
            if ($course->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $course->getClientOriginalName();
                //store into directory
                $course->storeAs('course', $file_name);
            }
            Course::find($id)->update([
                'title' => $request->title,
                'alt' => $request->alt,
                'description' => $request->description,
                'total_classes' => $request->total_class,
                'discount' => $request->discount,
                'image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        }

        else {
            Course::find($id)->update([
                'title' => $request->title,
                'alt' => $request->alt,
                'description' => $request->description,
                'total_classes' => $request->total_class,
                'discount' => $request->discount,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function course_overview(Request $request, $id)
    {
        Course::find($id)->update([

            'description' => $request->overview,
            /* 'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function courseModuleEditA(Request $request, $id)
    {
//        $data = Course_module::where('course_id',$id)->get();
        Course_module::find($id)->update([
            'course_idname' => $request->coursemodule,
            /* 'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function moduledelete($id)
    {
        $Course_module=Course_module::find($id);
        $Course_module->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }


    public function requirmentdelete($id)
    {
        $Requirment=Requirment::find($id);
        $Requirment->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }

    public function blogedit(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $blog = $request->file('img');
            if ($blog->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $blog->getClientOriginalName();
                //store into directory
                $blog->storeAs('blog', $file_name);
            }
            Blog::where('slug',$id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'alt' => $request->alt,
            'image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        }
        else {
            Blog::where('slug',$id)->update([
                'title' => $request->title,
            'description' => $request->description,
            'alt' => $request->alt,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function socialedit(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $blog = $request->file('img');
            if ($blog->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $blog->getClientOriginalName();
                //store into directory
                $blog->storeAs('social', $file_name);
            }
            Social_activity::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'alt' => $request->alt,
            'image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        }
        else {
            Social_activity::find($id)->update([
                'title' => $request->title,
            'description' => $request->description,
            'alt' => $request->alt,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function counteredit(Request $request, $id)
    {

            Count::find($id)->update([
                'batches' => $request->batch,
                'students' => $request->student,
                'mentors' => $request->mentor,
                's_students' => $request->s_student,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        return view('welcome')->with('message', 'Data is Update');
    }

    public function adminlist()
    {
        $users=User::Where('role',"super admin")->orWhere('role',"admin")->orderBy('id','DESC')->paginate(10);
        return view('admin.adminlist', compact('users'));
    }

    public function adminCreate(){
        return view('admin.admin-create');
    }

    public function adminStore(Request $request){
//        dd($request->all());
        $request->validate([
            'email' => 'unique:users',
            'password' => 'required|confirmed|',
        ]);

        $file_name = '';
        if ($request->hasFile('image')) {

            $success = $request->file('image');
            if ($success->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $success->getClientOriginalName();
                //store into directory
                $success->storeAs('admin', $file_name);
            }
        }

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'profile_image'=>$file_name,
            'role'=>$request->role,
            'status'=>$request->status,
            'password'=>Hash::make($request->password),
        ]);

        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function adminEdit($id){
        $edit = User::find($id);
        return view('admin.admin-edit',compact('edit'));
    }

    public function adminUpdate(Request $request, $id){
        $request->validate([
            'email' => 'unique:users',
            'password' => 'required|confirmed|',
        ]);
        $update = User::find($id);
        if ($request->hasFile('image')) {
            $blog = $request->file('image');
            if ($blog->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $blog->getClientOriginalName();
                //store into directory
                $blog->storeAs('admin', $file_name);
            }
            $update->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'profile_image'=>$file_name,
                'role'=>$request->role,
                'status'=>$request->status,
                'password'=>Hash::make($request->password),
            ]);
        }
        else {
            $update->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'role'=>$request->role,
                'status'=>$request->status,
                'password'=>Hash::make($request->password),
            ]);
        }
        return redirect()->back()->with('message', 'Data Updated Successfully.');
    }

    public function adminDelete($id){
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back()->with('message', 'Data Deleted Successfully.');
    }

    public function approveadmin($id)
    {
            User::find($id)->update([
                "status"=> "active"
                /*'updated_by'=>auth()->user()->id*/
            ]);
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function blockadmin($id)
    {
        User::find($id)->update([
            "status"=> "block"
            /*'updated_by'=>auth()->user()->id*/
        ]);
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function blockc($id)
    {
        Course::find($id)->update([
            "status"=> "block"
            /*'updated_by'=>auth()->user()->id*/
        ]);
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function activec($id)
    {
        Course::find($id)->update([
            "status"=> "active"
            /*'updated_by'=>auth()->user()->id*/
        ]);
        return redirect()->back()->with('message', 'Data is Update');
    }



    public function facilities()
    {
        $facilities=Facility::get();
        return view('admin.facilities', compact('facilities'));
    }


    public function why_us()
    {
        $whyuss=Why_us::get();
        return view('admin.whyus', compact('whyuss'));
    }

    public function facilityedit($id)
    {
        $facility = Facility::find($id);
        return view('admin.facility-edit', compact('facility'));
    }


    public function facilityedit2(Request $request, $id)
    {
        Facility::find($id)->update([
            'name'=> $request->name,
            'description'=> $request->description,
            /*'updated_by'=>auth()->user()->id*/
        ]);
        return redirect()->back()->with('message', 'Data is Update');
    }



    public function whyusedit($id)
    {
        $whyus = Why_us::find($id);
        return view('admin.whyus-edit', compact('whyus'));
    }


    public function whyusedit2(Request $request, $id)
    {
        Why_us::find($id)->update([
                'title'=> $request->name,
                'description'=> $request->description,
                /*'updated_by'=>auth()->user()->id*/
            ]);
        return redirect()->back()->with('message', 'Data is Update');
    }


    public function sliderdelete($id)
    {
        $slider=Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }

    public function gallerydelete($id)
    {
        $gallery=Gallery::find($id);
        $gallery->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }

    public function messageview(Request $request, $id)
    {
        Contact_us::find($id)->update([
            'status'=> "seen",

            /*'updated_by'=>auth()->user()->id*/
        ]);


        $contact_us=Contact_us::find($id);
        return view('admin.messageview', compact('contact_us'));

    }

    public function messagedetails(Request $request, $id)
    {
        Contact_us::find($id)->update([
            'status'=> "seen",

            /*'updated_by'=>auth()->user()->id*/
        ]);

        $contact_uses=Contact_us::orderBy('id','DESC')->get();
        $contact_us=Contact_us::find($id);
        return view('admin.messagedetails', compact('contact_us','contact_uses'));

    }

    public function consultview(Request $request, $id)
    {
        Consult::find($id)->update([
            'status'=> "seen",

            /*'updated_by'=>auth()->user()->id*/
        ]);

        $consult=Consult::find($id);
        return view('admin.consultview', compact('consult'));
    }

    public function consultdetails(Request $request, $id)
    {
        Consult::find($id)->update([
            'status'=> "seen",

            /*'updated_by'=>auth()->user()->id*/
        ]);

        $consults=Consult::orderBy('id','DESC')->get();

        $consult=Consult::find($id);
        return view('admin.consultdetails', compact('consult','consults'));

    }

    public function wsliderlist()
    {
        $welcomeslides=Welcome_slide::get();
        return view('admin.wslidelist', compact('welcomeslides'));
    }

    public function wsliderEdit($id){
        $edit = Welcome_slide::find($id);
        return view('admin.wsliderEdit', compact('edit'));
    }

    public function wsliderUpdate(Request $request, $id){
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:png',
            ]);
            $event = $request->file('image');
            if ($event->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $event->getClientOriginalName();
                //store into directory
                $event->storeAs('slider', $file_name);
            }
            Welcome_slide::find($id)->update([
                'alt' => $request->alt,
                'image' => $file_name
            ]);
        }
        else {
            Welcome_slide::find($id)->update([
                'alt' => $request->alt,
            ]);
        }
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function wsliderdelete($id)
    {
        $slide=Welcome_slide::find($id);
        $slide->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }

    public function pagetitle()
    {
        $titles=Title::get()->toArray();
        // dd($titles);
        array_splice($titles, 15, 1);
        array_splice($titles, 16, 1);
        return view('admin.pagetitle', compact('titles'));
    }

    public function pageSearch(Request $request)
    {
        $search = $request->input('search');
        $titles=Title::where('page_name', 'LIKE', "%{$search}%")
            ->orWhere('text', 'LIKE', "%{$search}%")
            ->get();
        return view('admin.pagetitle', compact('titles'));
    }

    public function titleedit($id)
    {
        $titles = Title::find($id);
        return view('admin.titleedit', compact('titles'));
    }

    public function titleedit2(Request $request, $id)
    {
        Title::find($id)->update([
                'page_name'=> $request->page_name,
                'text'=> $request->title,
                'description'=> $request->description,
                'keyword'=> $request->keyword,
                /*'updated_by'=>auth()->user()->id*/
            ]);
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function sisterconcern()
    {
        $sisterconcens=Our_sister_concern::get();
        return view('admin.sister-concern', compact('sisterconcens'));
    }

    public function addsister()
    {
        return view('admin.addsister');
    }

    public function addsister2(Request $request)
    {
        $request->validate([
            'logo' => 'image|mimes:png',
        ]);

        $file_name = '';
        if ($request->hasFile('logo')) {

            $sister = $request->file('logo');
            if ($sister->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $sister->getClientOriginalName();
                //store into directory
                $sister->storeAs('sister', $file_name);
            }
        }

        Our_sister_concern::create([
            'name' => $request->name,
            'link' => $request->link,
            'logo' => $file_name
        ]);
        return redirect()->back()->with('message', 'Information Stored Successfully.');
    }

    public function sisteredit($id)
    {
        $sister = Our_sister_concern::find($id);
        return view('admin.sister-edit', compact('sister'));
    }

    public function sisteredit2(Request $request, $id)
    {
        $request->validate([

            'logo' => 'image|mimes:png',

        ]);

        if ($request->hasFile('logo')) {
            $sister = $request->file('logo');
            if ($sister->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $sister->getClientOriginalName();
                //store into directory
                $sister->storeAs('sister', $file_name);
            }
            Our_sister_concern::find($id)->update([
                'name' => $request->name,
                'link' => $request->link,
                'alt' => $request->alt,
                'logo' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        }
        else {
            Our_sister_concern::find($id)->update([
                'name' => $request->name,
                'link' => $request->link,
                'alt' => $request->alt,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function sisterdelete($id)
    {
        $sister=Our_sister_concern::find($id);
        $sister->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }

    Public Function logo()
    {
        $logo=Logo::where('place','header')->get();
        return view ('admin.logo', compact('logo'));
    }

    public function logoedit($id)
    {
        $logo = Logo::find($id);
        return view('admin.logo-edit', compact('logo'));
    }

    public function logoedit2(Request $request, $id)
    {
        $request->validate([
            'logo' => 'image|mimes:png',
        ]);

            $logo = $request->file('logo');
            if ($logo->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $logo->getClientOriginalName();
                //store into directory
                $logo->storeAs('logo', $file_name);
            }
            Logo::find($id)->update([
                'logo' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);

        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function sociallist()
    {
        $links=Social_link::get();
        return view('admin.sociallist', compact('links'));
    }

    public function newlink()
    {
        return view('admin.newlink');
    }

    public function newlink2(Request $request)
    {
        Social_link::create([
            'class' => $request->class,
            'link' => $request->link,

        ]);
        return redirect()->back()->with('message', 'Information Stored Successfully.');
    }

    public function linkedit($id)
    {
        $link=Social_link::find($id);
        return view('admin.linkedit', compact('link'));
    }

    public function linkedit2(Request $request, $id)
    {
        Social_link::find($id)->update([
            'class' => $request->class,
        'link' => $request->link,
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect('/sociallist')->with('message', 'Data Stored Successfully.');
    }

    public function linkdelete($id)
    {
        $link=Social_link::find($id);
        $link->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }

    public function editprofile()
    {
        return view('admin.editprofile');
    }

    public function editprofile2(Request $request, $id)
    {
        if ($request->hasFile('image'))
        {
            $admin = $request->file('image');
            if ($admin->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $admin->getClientOriginalName();
                //store into directory
                $admin->storeAs('admin', $file_name);
            }

            User::find($id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'profile_image' => $file_name,
                /*'updated_by'=>auth()->user()->id*/
            ]);

        }
        else {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }


        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function editpassword()
    {
        return view('admin.editpassword');
    }

    public function location(Request $request, $id)
    {
        Location::find($id)->update([
            'url'=> $request->location,

            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();

    }

    public function s_students()
    {
        $s_students=Success_student::orderBy('priority','ASC')->get();
        return view('admin.s-students', compact('s_students'));
    }


    public function successedit($id)
    {
        $s_student=Success_student::find($id);
        return view('admin.success-edit', compact('s_student'));
    }

    public function fedit($id)
    {
        $feedback=Student_feedback::find($id);
        return view('admin.fedit', compact('feedback'));
    }


    public function fedit2(Request $request, $id)
    {
        if ($request->hasFile('image'))
        {
            $feedback = $request->file('image');
            if ($feedback->isValid()) {
            //generate file name
            $file_name = date('Ymdhms') . '.' . $feedback->getClientOriginalName();
            //store into directory
            $feedback->storeAs('feedback', $file_name);
        }

        Student_feedback::find($id)->update([

            'name' => $request->name,
            'priority'=> $request->priority,
            'departmeent' =>$request->department,
            'description' => $request->description,
            'image' => $file_name,
            /*'updated_by'=>auth()->user()->id*/
        ]);

        }
        else {
            Student_feedback::find($id)->update([
                'name' => $request->name,
                'priority'=> $request->priority,
                'description' => $request->description,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data Stored Successfully.');
    }

    public function successedit2(Request $request, $id)
    {
        if ($request->hasFile('image'))
        {
            $success = $request->file('image');
            if ($success->isValid()) {
            //generate file name
            $file_name = date('Ymdhms') . '.' . $success->getClientOriginalName();
            //store into directory
            $success->storeAs('success', $file_name);
        }

        Success_student::find($id)->update([

            'name' => $request->name,
            'priority'=> $request->priority,
            'description' => $request->description,
            'alt' => $request->alt,
            'image' => $file_name,
            /*'updated_by'=>auth()->user()->id*/
        ]);

    }
    else {
        Success_student::find($id)->update([
            'name' => $request->name,
            'priority'=> $request->priority,
            'description' => $request->description,
            'alt' => $request->alt,
            /* 'updated_by'=>auth()->user()->id*/
        ]);
    }


    return redirect()->back()->with('message', 'Data Stored Successfully.');
    }


    public function feedbacklist()
    {
        $feedbacks=Student_feedback::orderBy('priority','ASC')->get();
        return view('admin.feedbacklist', compact('feedbacks'));
    }

    public function menu_index()
    {
        $menu = DB::table('menus')->get();
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
    	return view('admin.variablepage.menu',compact('menu', 'sub'));
    }

    public function menu_store(Request $request)
    {
        $data=array();
        $data['menu_name']=$request->menu_name;
        $data['menu_link']=$request->menu_link;
        $data['menu_status']=$request->menu_status;
        DB::table('menus')->insert($data);
        return redirect()->back();

    }

    public function menu_destroy($id)
    {
        $menu=Menu::find($id);
        $menu->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }

    public function menu_update(Request $request , $id)
    {
        $menu=Menu::find($request->id);
        $menu->menu_name=$request->menu_name;
        $menu->menu_link=$request->menu_link;
        $menu->menu_status=$request->menu_status;
        $menu->save();
        return redirect()->back();
    }

    public function submenu_index()
    {
    	$sub = DB::table('submenus')->get();
        $menu = DB::table('menus')->
        where('menu_status', 'Active')->get();
    	return view('admin.variablepage.sub-menu',compact('menu', 'sub'));
    }

    public function submenu_store(Request $request)
    {
        $data=array();
        $data['sub_name']=$request->sub_name;
        $data['menu_id']=$request->menu_id;
        $data['sub_link']=$request->sub_link;
        $data['sub_status']=$request->sub_status;
        DB::table('submenus')->insert($data);
        return redirect()->back();
    }

    public function submenu_destroy($id)
    {
        $submenu =SubMenu::where('id',$id)->first();
        $submenu->delete();
        return redirect()->back();
    }

    public function submenu_update(Request $request , $id)
    {

        if($request->sub_link=="design1")
        {
            $design=Design1::where('type',"submenu")->where('m_id',$id)->get();
            if(count($design)==0)
            {

            Design1::create([
                'sec1_status' => "Active",
                'type' => "submenu",
                'm_id' => $id,
                'sec1_title' =>"Section 1",
                'sec1_text' =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan pretium vehicula. Mauris aliquam neque nulla. Donec id justo justo. Etiam non sem metus. Nam condimentum a est ut varius. Sed mattis felis nec rhoncus dapibus. Nulla nec facilisis ante. Aenean faucibus non nisl et varius. Aliquam egestas ac nisl vel pharetra. Nam",
                'sec2_status' =>"Active",
                'sec3_status' =>"Active",
                'sec3p1_title' =>"Section 3- Part 1",
                'sec3p2_title' =>"Section 3- Part 2",
                'sec3p1_text' =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan pretium vehicula. Mauris aliquam neque nulla. Donec id justo justo. Etiam non sem metus. Nam condimentum a est ut varius. Sed mattis felis nec rhoncus dapibus. Nulla nec facilisis ante. Aenean faucibus non nisl et varius. Aliquam egestas ac nisl vel pharetra. Nam",
                'sec3p2_text' =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan pretium vehicula. Mauris aliquam neque nulla. Donec id justo justo. Etiam non sem metus. Nam condimentum a est ut varius. Sed mattis felis nec rhoncus dapibus. Nulla nec facilisis ante. Aenean faucibus non nisl et varius. Aliquam egestas ac nisl vel pharetra. Nam",
                'sec4_status' =>"Active",
                'sec5_status' =>"Active",
                'sec5_title' =>"Section 5",
                'sec5_text' =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan pretium vehicula. Mauris aliquam neque nulla. Donec id justo justo. Etiam non sem metus. Nam condimentum a est ut varius. Sed mattis felis nec rhoncus dapibus. Nulla nec facilisis ante. Aenean faucibus non nisl et varius. Aliquam egestas ac nisl vel pharetra. Nam",
                'sec6_status' =>"Active",
                'sec6_title' =>"Section 6",
                'sec6_text' =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan pretium vehicula. Mauris aliquam neque nulla. Donec id justo justo. Etiam non sem metus. Nam condimentum a est ut varius. Sed mattis felis nec rhoncus dapibus. Nulla nec facilisis ante. Aenean faucibus non nisl et varius. Aliquam egestas ac nisl vel pharetra. Nam",

            ]);
        }
        }

        if($request->sub_link=="design2")
        {

            $design=Design2::where('type',"submenu")->where('m_id',$id)->get();
            if(count($design)==0)
            {
            Design2::create([
                'title' => "Section 1",
                'type' =>"submenu",
                'm_id'=>$id,
                'part1' =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan pretium vehicula. Mauris aliquam neque nulla. Donec id justo justo. Etiam non sem metus. Nam condimentum a est ut varius. Sed mattis felis nec rhoncus dapibus. Nulla nec facilisis ante. Aenean faucibus non nisl et varius. Aliquam egestas ac nisl vel pharetra. Nam",
                'part2' =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan pretium vehicula. Mauris aliquam neque nulla. Donec id justo justo. Etiam non sem metus. Nam condimentum a est ut varius. Sed mattis felis nec rhoncus dapibus. Nulla nec facilisis ante. Aenean faucibus non nisl et varius. Aliquam egestas ac nisl vel pharetra. Nam",
                'part3' =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan pretium vehicula. Mauris aliquam neque nulla. Donec id justo justo. Etiam non sem metus. Nam condimentum a est ut varius. Sed mattis felis nec rhoncus dapibus. Nulla nec facilisis ante. Aenean faucibus non nisl et varius. Aliquam egestas ac nisl vel pharetra. Nam",
            ]);
            }
        }
        $submenu=SubMenu::find($request->id);
        $submenu->sub_name=$request->sub_name;
        $submenu->menu_id=$request->menu_id;
        $submenu->sub_link=$request->sub_link;
        $submenu->sub_status=$request->sub_status;
        $submenu->save();
        return redirect()->back();
    }

    public function design1sec1(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $design1 = $request->file('img');
            if ($design1->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $design1->getClientOriginalName();
                //store into directory
                $design1->storeAs('design1', $file_name);
            }
            Design1::find($id)->update([
                'sec1_title' => $request->heading,
                'sec1_text' => $request->description,
                'sec1_image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Design1::find($id)->update([
                'sec1_title' => $request->heading,
                'sec1_text' => $request->description,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function design1sec3p1(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $design1 = $request->file('img');
            if ($design1->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $design1->getClientOriginalName();
                //store into directory
                $design1->storeAs('design1', $file_name);
            }
            Design1::find($id)->update([
                'sec3p1_title' => $request->heading,
                'sec3p1_text' => $request->description,
                'sec3p1_image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Design1::find($id)->update([
                'sec3p1_title' => $request->heading,
                'sec3p1_text' => $request->description,                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function design1sec3p2(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $design1 = $request->file('img');
            if ($design1->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $design1->getClientOriginalName();
                //store into directory
                $design1->storeAs('design1', $file_name);
            }
            Design1::find($id)->update([
                'sec3p2_title' => $request->heading,
                'sec3p2_text' => $request->description,
                'sec3p2_image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Design1::find($id)->update([
                'sec3p2_title' => $request->heading,
                'sec3p2_text' => $request->description,                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function design1sec5(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $design1 = $request->file('img');
            if ($design1->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $design1->getClientOriginalName();
                //store into directory
                $design1->storeAs('design1', $file_name);
            }
            Design1::find($id)->update([
                'sec5_title' => $request->heading,
                'sec5_text' => $request->description,
                'sec5_image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Design1::find($id)->update([
                'sec5_title' => $request->heading,
                'sec5_text' => $request->description,                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function design1sec6(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $design1 = $request->file('img');
            if ($design1->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $design1->getClientOriginalName();
                //store into directory
                $design1->storeAs('design1', $file_name);
            }
            Design1::find($id)->update([
                'sec6_title' => $request->heading,
                'sec6_text' => $request->description,
                'sec6_image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Design1::find($id)->update([
                'sec6_title' => $request->heading,
                'sec6_text' => $request->description,                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }

        return redirect()->back()->with('message', 'Data is Update');
    }


    public function d1title(Request $request, $id)
    {
        Design1::find($id)->update([
            'page_title' => $request->title,
        ]);

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function d2title(Request $request, $id)
    {
        Design2::find($id)->update([
            'page_title' => $request->title,
        ]);

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function section1($id)
    {
        Design1::find($id)->update([
            'sec1_status' => "hide",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function sectionh($id)
    {
        Design1::find($id)->update([
            'sec1_status' => "Active",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function section2($id)
    {
        Design1::find($id)->update([
            'sec2_status' => "hide",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function section2h($id)
    {
        Design1::find($id)->update([
            'sec2_status' => "Active",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function section3($id)
    {
        Design1::find($id)->update([
            'sec3_status' => "hide",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function section3h($id)
    {
        Design1::find($id)->update([
            'sec3_status' => "Active",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function section4($id)
    {
        Design1::find($id)->update([
            'sec4_status' => "hide",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function section4h($id)
    {
        Design1::find($id)->update([
            'sec4_status' => "Active",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function section5($id)
    {
        Design1::find($id)->update([
            'sec5_status' => "hide",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function section5h($id)
    {
        Design1::find($id)->update([
            'sec5_status' => "Active",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function section6($id)
    {
        Design1::find($id)->update([
            'sec6_status' => "hide",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function section6h($id)
    {
        Design1::find($id)->update([
            'sec6_status' => "Active",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function copyright(Request $request, $id)
    {

        Copyright::find($id)->update([
            'copyright' => $request->copyright,
        ]);


        return redirect()->back()->with('message', 'Data is Update');
    }

    public function headingedit(Request $request, $id)
    {
        Heading::find($id)->update([

            'name' => $request->heading,
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back()->with('message', 'Data is Update');
    }

    public function change_password(){
        return view('admin.changepassword');
    }

    public function update_password(Request $request){
        $request->validate([
        'old_password'=>'required|min:8|max:100',
        'new_password'=>'required|min:8|max:100',
        'confirm_password'=>'required|same:new_password'
        ]);

        $current_user=auth()->user();

        if(!(Hash::check($request->get('old_password'), Auth()->user()->password))){

           return redirect()->back()->with('message','Old password does not matched.');

        }
        else{
             User::where('id', Auth()->user()->id)->first()->update([
                'password'=>bcrypt($request->new_password)
            ]);

            return redirect()->back()->with('message','Password successfully updated.');
        }
    }

    public function all_consult()
        {
            $consults=Consult::orderBy('id','DESC')->get();
            return view('admin.allconsult', compact('consults'));
        }

    public function all_message()
    {
        $contact_uses=Contact_us::orderBy('id','DESC')->get();
        return view('admin.allmessage', compact('contact_uses'));
    }

    public function othotha(Request $request, $id)
    {
        Othotha::find($id)->update([
            'prothom' => $request->prothom,
            'ditio' => $request->ditio,
            'tritio' => $request->tritio,
            /* 'updated_by'=>auth()->user()->id*/
        ]);

    return redirect()->back();
    }

    public function whyChooseUsHeadingContent(Request $request, $id)
    {
        Othotha::find($id)->update([
            'prothom' => $request->prothom,
            'ditio' => 'Null',
            'tritio' => 'Null',
            /* 'updated_by'=>auth()->user()->id*/
        ]);

    return redirect()->back();
    }

    public function heading12(Request $request, $id){
//        dd($request->all());
        $heading = Heading::find($id);
        $heading->update([
            'name' => $request->heading
        ]);
        return back();
    }


    public function analytic()
    {
        $analytic=Analytic::first();
        return view('admin.analytic', compact('analytic'));
    }

    public function metakey()
    {
        $metakey=Meta_keyword::first();
        return view('admin.metakey', compact('metakey'));
    }



    public function metakeyup(Request $request, $id)
    {
        Meta_keyword::find($id)->update([
            'keyword' => $request->metakey,
            /* 'updated_by'=>auth()->user()->id*/
        ]);

    return redirect('/meta-key')->with('message', 'Data is Update');
    }

    public function analytic2(Request $request, $id)
    {
        Analytic::find($id)->update([
            'script' => $request->script,
            /* 'updated_by'=>auth()->user()->id*/
        ]);
    return redirect('/Google-Analytic')->with('message', 'Data is Update');
    }

    public function eventedit(Request $request, $id)
    {

        if ($request->hasFile('img')) {
            $request->validate([
                'img' => 'image|mimes:png',
            ]);
            $event = $request->file('img');
            if ($event->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $event->getClientOriginalName();
                //store into directory
                $event->storeAs('event', $file_name);
            }
            Event::find($id)->update([
            'title' => $request->title,
            'date' => $request->date,
            's_time' => $request->s_time,
            'e_time' => $request->e_time,
            'alt' => $request->alt,
            'image' => $file_name
                /*'updated_by'=>auth()->user()->id*/
            ]);
        }
        else {
            Event::find($id)->update([
            'title' => $request->title,
            'date' => $request->date,
            's_time' => $request->s_time,
            'e_time' => $request->e_time,
            'alt' => $request->alt,
                /* 'updated_by'=>auth()->user()->id*/
            ]);
        }
        return redirect()->back()->with('message', 'Data is Update');
    }

    public function departmentblock($id)
    {
        Department::find($id)->update([
            'status' => "block",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function departmentactive($id)
    {
        Department::find($id)->update([
            'status' => "active",
            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function pcomment($id)
    {
//        $comments = Comment::where('status', "pending")->where('blog_id', $id)->orderBy('id','DESC')->get();
        $comments = Comment::where('blog_id', $id)->orderBy('id','DESC')->get();
        return view('admin.commentlist', compact('comments'));
    }

    public function acomment(Request $request, $id)
    {
        Comment::find($id)->update([
            'status'=> "approve",

            /*'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function commentsPending(Request $request, $id){
        Comment::find($id)->update([
            'status'=> "pending",
        ]);
        return redirect()->back();
    }

    public function commentsDelete($id){
        $delete = Comment::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function bloglist()
    {
        $blogs = Blog::get();
        return view('admin.bloglist', compact('blogs'));
    }

    public function deleteBlog($id){
        $del = Blog::find($id);
        $delComment = Comment::where('blog_id', $del->slug)->get();
//        dd($delComment);
        $delComment->each->delete();
        $del->delete();
        return redirect()->back();

    }

    public function admissionList(){
        $students=Admission::orderBy('id','DESC')->paginate(15);
        return view('admin.admission-list', compact('students'));
    }

    public function admissionDelete($id){
        $admission = Admission::find($id);
        $admission->delete();
        return back()->with('message', 'Data is delete Successfully');
    }

    public function p_done()
    {
       $page="Complete";
        $students=Admission::where('payment', 'Complete')->orderBy('id','DESC')->paginate(25);
        return view('admin.dstudentlist', compact('students','page'));
    }

    public function p_pending()
    {
       $page="Pending";
        $students=Admission::where('payment', '!=', 'Complete')->orderBy('id','DESC')->paginate(25);
        return view('admin.dstudentlist', compact('students','page'));
    }

    public function student_profile($id)
    {

        $student=Admission::where('id', $id)->first();
        return view('student.profile', compact('student'));
    }

    public function payNow1($id)
    {
        Admission::find($id)->update([
            'payment' => "Complete",
            'invoice' => "Cash",
            /* 'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back()->with('message', 'Payment Completed.');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $page="Student Information";
        $students=Admission::where('id', 'LIKE', "%{$search}%")
            ->orWhere('name', 'LIKE', "%{$search}%")
            ->orWhere('course_name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->paginate(25);
        return view('admin.dstudentlist', compact('students','page'));
    }

    public function admissionStudentSearch(Request $request)
    {
        $search = $request->input('search');
        $page="Student Information";
        $students=Admission::where('id', 'LIKE', "%{$search}%")
            ->orWhere('name', 'LIKE', "%{$search}%")
            ->orWhere('course_name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->paginate(25);
        return view('admin.admission-list', compact('students','page'));
    }

    public function coupon()
    {
        $coupons=Coupon::get();
        return view('admin.coupon', compact('coupons'));
    }

    public function coupon_update(Request $request , $id)
    {  $request->validate([
        'status'=>'required',

        ]);
        Coupon::find($id)->update([
            'code' => $request->code,
            'amount' => $request->amount,
            'status'=> $request->status,
            /* 'updated_by'=>auth()->user()->id*/
        ]);

        return redirect()->back();
    }

    public function coupon_destroy($id)
    {
        $coupon=Coupon::find($id);
        $coupon->delete();
        return redirect()->back()->with('message', 'Data is delete Successfully');
    }

    public function careerCoundseling(){
        $counselings = CareerCounseling::first();
        return view('admin.career-counseling', compact('counselings'));
    }

    public function storeCareerCounseling(Request $request)
    {
        $file_name = '';
        if ($request->hasFile('image')) {

            $welcome = $request->file('image');
            if ($welcome->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $welcome->getClientOriginalName();
                //store into directory
                $welcome->storeAs('welcome', $file_name);
            }
        }

        CareerCounseling::create([
            'image' => $file_name
        ]);
        return redirect()->back()->with('message', 'Career Counseling Added.');
    }

    public function updateCareerCounseling(Request $request, $id){
//        dd($request->all());
        $data = CareerCounseling::find($id);
        if ($request->hasFile('image')) {
            $welcome = $request->file('image');
            if ($welcome->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $welcome->getClientOriginalName();
                //store into directory
                $welcome->storeAs('welcome', $file_name);
            }
            $data->update([
                'alt' => $request->alt,
                'image' => $file_name,
            ]);
        }else{
            CareerCounseling::find($id)->update([
                'alt' => $request->alt,
            ]);
        }
        return redirect()->back()->with('message', 'Image is Update');

    }

    public function partnerList(){
        $partners = Partner::orderBy('id','DESC')->paginate(12);
        return view('admin.partner.index', compact('partners'));
    }

    public function partnerCreate(){
        return view('admin.partner.create');
    }

    public function partnerStore(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $file_name = '';
        if ($request->hasFile('image')) {

            $event = $request->file('image');
            if ($event->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $event->getClientOriginalName();
                //store into directory
                $event->storeAs('partner', $file_name);
            }
        }

        Partner::create([
            'name' => $request->name,
            'image' => $file_name,
        ]);
        return redirect()->back()->with('message', 'Partner Added.');
    }

    public function partnerDelete($id){
        $del = Partner::find($id);
        $del->delete();
        return redirect()->back()->with('message', 'Partner Deleted Successfully.');
    }

    public function contactList(){
        $contacts = Contact_us::where('status','unseen')->orderBy('id','DESC')->paginate(10);
        return view('admin.contact-list', compact('contacts'));
    }

    public function contactSeen(){
        $contacts = Contact_us::where('status','seen')->orderBy('id','DESC')->paginate(10);
        return view('admin.contact-list-seen', compact('contacts'));
    }

    public function contactView($id){
        $show = Contact_us::find($id);
        $show->update([
            'status'=>'seen',
        ]);
        return view('admin.contact-show',compact('show'));
    }

    public function contactDelete($id){
        $del = Contact_us::find($id);
        $del->delete();
        return redirect()->back()->with('message', 'Data Deleted Successfully.');
    }

    public function googleFacebookReviews(){
        $edit = Review::where('id',1)->first();
        return view('admin.google-facebook-review',compact('edit'));
    }

    public function googleFacebookReviewsStore(Request $request, $id){
        Review::find($id)->update([
            'google_h'=>$request->google_h,
            'google_r'=>$request->google_r,
            'facebook_h'=>$request->facebook_h,
            'facebook_r'=>$request->facebook_r,
        ]);
        return redirect()->back()->with('message', 'Reviews is Update');
    }

    public function galleryEdit($id){
        $edit = Gallery::find($id);
        return view('admin.gallery-image-edit', compact('edit'));
    }


}
