<?php

namespace App\Http\Controllers;

use App\Mail\AdmissionMail;
use App\Mail\ContactMail;
use App\Models\About;
use App\Models\Partner;
use App\Models\Slider;
use Mail;
use App\Models\Batch;
use NagadPayment;

use App\Models\Course_module;
use App\Models\Gallery;
use App\Models\Student_feedback;
use App\Models\Event;
use App\Models\Why_us;
use App\Models\Design1;
use App\Models\Design2;
use App\Models\Welcome_slide;
use App\Models\Admission;
use App\Models\Consult;
use App\Models\Location;
use App\Models\Comment;
use App\Models\Requirment;
use App\Models\Video;
use App\Models\Mentor;
use App\Models\Social_activity;
use App\Models\Social_cover;
use App\Models\Contact_us;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Contact;
use App\Models\Registration;
use App\Models\Department;
use App\User;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about()
    {
        $why_uss=Why_us::get();
        $all_data = About::first();
        $mentors = Mentor::get();
        return view('about', compact('all_data', 'mentors','why_uss'));
    }
    
    public function termsCondition()
    {
        return view('terms-condition');
    }
    
    public function returnRefundPolicy()
    {
        return view('return-refund-policy');
    }
    
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }
    
    public function disclaimer()
    {
        return view('disclaimer');
    }

    public function course()
    {
        $departments = Department::where('status', 'active')->get();
        return view('course', compact('departments'));
    }


    public function admission()
    {
        $courses = Course::where('status','active')->get();
        // $all_batch = Batch::get();
        return view('admission', compact('courses'));
    }

    public function allcourse()
    {
        $courses = Course::where('status',"active")->get();
        return view('allcourse', compact('courses'));
    }

    public function allblog()
    {
        $populars = Blog::orderBy('id', 'DESC')->get();
        return view('allblog', compact('populars'));
    }
    
    public function getSingleCourse($id)
    {
        $data = Course::find($id);
        return response()->json($data);
    }

    public function admission2(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'  => 'required|unique:users'
        ]);

        $user=User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt('12345678'),
            'role' =>"student",
            'status' => "staudent"
        ]);

        if($request->course_duration)
        {
            
            $course = \App\Models\Course::where('id', $request->course_duration)->first();
            
            $withoutPercentence = rtrim($course->discount, "%");
            $percentenceValue = $withoutPercentence / 100; 
            $discountTaka = $percentenceValue * $course->course_fee;
            
            $fee= $course->fee - $discountTaka;

            $admission=Admission::create([
                //'column name'=>'input / value'

                'name' => $request->name,
                'user_id' => $user->id,
                'phone' => $request->phone,
                'email' => $request->email,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'present_address' => $request->present_address,
                'parmanent_address' => 'N/A',
                'national_id' => $request->nid,
                'dob' => $request->dob,
                'blood' => 'N/A',
                'gender' => $request->gender,
                'yop1' => $request->yop1,
                'yop2' => $request->yop2,
                'yop3' => $request->yop3,
                'yop4' => $request->yop4,
                'degree1' => $request->degree1,
                'degree2' => $request->degree2,
                'degree3' => $request->degree3,
                'degree4' => $request->degree4,
                'subject1' => $request->subject1,
                'subject2' => $request->subject2,
                'subject3' => $request->subject3,
                'subject4' => $request->subject4,
                'bou1' => $request->bou1,
                'bou2' => $request->bou2,
                'bou3' => $request->bou3,
                'bou4' => $request->bou4,
                'course_name' => $request->course_name,
                'course_duration' => $request->course_duration,
                'status'=>"running",
                'payment'=> $request->payment,
                'fee'=> $request->netPrice,
            ]);
        }

        else {
            $batch=Batch::where('id', $request->batch_id)->first();
            $course_name= $batch->course_name;
            $course_duration= $batch->course_id;
            
            $course = \App\Models\Course::where('id', $batch->course_id)->first();
            $withoutPercentence = rtrim($course->discount, "%");
            $percentenceValue = $withoutPercentence / 100; 
            $discountTaka = $percentenceValue * $course->course_fee;
            
            $fee= $batch->fee - $discountTaka;
            
            // $fee= $batch->fee;

            $admission= Admission::create([
                //            'column name'=>'input / value'
                'name' => $request->name,
                'user_id' => $user->id,
                'phone' => $request->phone,
                'email' => $request->email,
                'father_name' => 'N/A',
                'mother_name' => 'N/A',
                'present_address' => $request->present_address,
                'parmanent_address' => 'N/A',
                'national_id' => 0,
                'dob' => $request->dob,
                'blood' => 'N/A',
                'gender' => 'N/A',
                'yop1' => $request->yop1,
                'yop2' => $request->yop2,
                'yop3' => $request->yop3,
                'yop4' => $request->yop4,
                'degree1' => $request->degree1,
                'degree2' => $request->degree2,
                'degree3' => $request->degree3,
                'degree4' => $request->degree4,
                'subject1' => $request->subject1,
                'subject2' => $request->subject2,
                'subject3' => $request->subject3,
                'subject4' => $request->subject4,
                'bou1' => $request->bou1,
                'bou2' => $request->bou2,
                'bou3' => $request->bou3,
                'bou4' => $request->bou4,
                'course_name' => $course_name,
                'course_duration' => $course_duration,
                'status'=>"running",
                'payment'=> "Pending",
                'fee'=> $fee
                ]);
            }

        $details = [
            'title' => 'Mail From Projuktir Pathshala Institute',
            'body' => 'Please check projuktir patshala institute admin panel. Student enrolled.'
        ];
       $cs =  \Illuminate\Support\Facades\Mail::to("dmsrubel97@gmail.com")->send(new AdmissionMail($details));
        var_dump( $cs );


        // return back()->with('message', 'Thanks for submitting the information. We will contact you soon.');
        // return redirect()->route('checkout');


    }

    public function admissionCourse($slug){
        $course = Course::where('slug', $slug)->first();
        // return view('course-wise-admission',compact('course'));
        return view('admission',compact('course'));
    }

    public function admissionCourseStore(Request $request){
        $request->validate([
            'name'      => 'required',
            'email'  => 'required|unique:users'
        ]);

        $user=User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt('12345678'),
            'role' =>"student",
            'status' => "staudent"
        ]);

        Admission::create([
            'name' => $request->name,
            'user_id' => $user->id,
            'phone' => $request->phone,
            'email' => $request->email,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'present_address' => $request->present_address,
            'parmanent_address' => 'N/A',
            'national_id' => $request->nid,
            'dob' => $request->dob,
            'blood' => 'N/A',
            'gender' => $request->gender,
            'yop1' => $request->yop1,
            'yop2' => $request->yop2,
            'yop3' => $request->yop3,
            'yop4' => $request->yop4,
            'degree1' => $request->degree1,
            'degree2' => $request->degree2,
            'degree3' => $request->degree3,
            'degree4' => $request->degree4,
            'subject1' => $request->subject1,
            'subject2' => $request->subject2,
            'subject3' => $request->subject3,
            'subject4' => $request->subject4,
            'bou1' => $request->bou1,
            'bou2' => $request->bou2,
            'bou3' => $request->bou3,
            'bou4' => $request->bou4,
            'course_name' => $request->course_name,
            'course_duration' => $request->course_duration,
            'status'=>"running",
            'payment'=> $request->payment,
            'fee'=> $request->netPrice,
        ]);

        $details = [
            'title' => 'Mail From Projuktir Pathshala Institute',
            'body' => 'Please check projuktir patshala institute admin panel. Student enrolled.'
        ];
        // \Illuminate\Support\Facades\Mail::to("dmsgolamrabbi@gmail.com")->send(new AdmissionMail($details));
        \Illuminate\Support\Facades\Mail::to("dmsrubel97@gmail.com")->send(new AdmissionMail($details));
        


        return back()->with('message', 'Thanks for submitting the information. We will contact you soon.');


    }

//    public function checkout()
//    {
//        dd($admission);
//    }



    public function mentor()
    {
        $departments = Department::where('status', "active")->get();
        $mentors = Mentor::where('id', '>', '3' )->get();
        $firstTwoData = Mentor::take(2)->get();
        return view('mentor', compact('mentors','departments','firstTwoData'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(6);
        $populars = Blog::orderBy('viewed', 'DESC')->paginate(6);
        $recents = Blog::orderBy('id', 'DESC')->paginate(6);

        return view('blog', compact('blogs', 'populars','recents'));
    }

    public function blogdetails($slug)
    {
        $comments=Comment::where('blog_id', $slug)->where('status', "approve")->orderBy('id','DESC')->paginate(7);
        $populars = Blog::orderBy('viewed', 'DESC')->paginate(6);
        $recents = Blog::orderBy('id', 'DESC')->paginate(6);
        $view = Blog::where('slug', $slug)->first();
        Blog::where('slug', $slug)->update([
            'viewed' => $view->viewed + 1,
        ]);

        $coursess=Course::orderBy('id','DESC')->paginate(8);
        $blog = Blog::where('slug', $slug)->first();

//        return view('blog-details', compact('blog','populars','recents','coursess','comments'));

        return view('blog-details', compact('blog','populars','recents','coursess','comments'));
    }

    public function social_activity_details($id)
    {
        $social_activity = Social_activity::where('slug', $id)->first();
        return view('social_activity_details', compact('social_activity'));
    }

    public function contact()
    {
        $contact = Contact::first();
        $location=Location::first();

        return view('contact', compact('contact','location'));
    }
    public function review()
    {
        return view('review');
    }

    public function gallery()
    {
        $students = Gallery::where('category', 'Student')->orderBy('id', 'DESC')->get();
        $mentors = Gallery::where('category', 'Mentor')->orderBy('id', 'DESC')->get();
        $events = Gallery::where('category', 'Event')->orderBy('id', 'DESC')->get();
        $sliders = Slider::orderBy('id', 'DESC')->get();

        return view('gallery', compact('sliders', 'students', 'mentors', 'events'));
    }

    public function seminar()
    {
        $seminars = Event::where('category','Seminar')->where('status',"Active")->orderBy('date', 'DESC')->paginate(3);
        $workshops = Event::where('category','Workshop')->where('status',"Active")->orderBy('date', 'DESC')->paginate(3);

        return view('seminar', compact('seminars', 'workshops'));
    }

    public function socialActivity()
    {
        $social_activities=Social_activity::orderBy('id','DESC')->get();
        $social_cover=Social_cover::first();
        return view('social-activity',compact('social_activities','social_cover'));
    }

    public function partner(){
        $partners = Partner::orderBy('id','DESC')->get();
        return view('partner',compact('partners'));
    }

    public function studentFeedback()
    {
        // $social_cover=Social_cover::first();
        // $student_cover=Social_cover::where('id','!=',$social_cover->id)->first();
        // $video=Video::first();
        // $s_video=Video::where('id','!=',$video->id)->first();
        $all_feedback=Student_feedback::orderBy('priority','ASC')->get();
        return view('student-feedback',compact('all_feedback'));
    }

    public function course_details($slug)
    {

        $contact = Contact::first();
        $batch=Batch::where('status', "active")->first();
        $up_course=Course::where('id',$batch->course_id )->paginate(1);

        $course = Course::where('slug', $slug)->first();
//        $allCourse = Course::where('slug', $slug)->get();
//        dd($course);
        $relatcoursess=Course::where('department', $course->department)->where('status','active')->get();
        $course_modules=Course_module::where('course_id', $course->id)->get();
        $requirments=Requirment::where('course_id', $course->id)->get();
        return view('course-details', compact('course','course_modules','relatcoursess','up_course','contact','requirments'));
    }

    public function contactus(Request $request)
    {
//        Mail::send('emails.contactmail',[
//            'name' => $request->name,
//            'email' => $request->email,
//            'subject' => $request->subject,
//            'phone' => $request->phone,
//            'hululu' => $request->message
//        ], function($mail) use($request){
//            $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
//            $mail->to("dmsuttara1@gmail.com")->subject('Contact Us Message');
//
//        });


       Contact_us::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'status' => "unseen",
            'message' => $request->message,
        ]);
        

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
        

        // \Illuminate\Support\Facades\Mail::to("enroll@projuktirpathshalabd.com")->send(new ContactMail($details));
        $cs = \Illuminate\Support\Facades\Mail::to("dmsrubel97@gmail.com")->send(new ContactMail($details));
        // mail('dmsrubel97@gmail.com', 'test', 'message');
        

        return redirect()->back()->with('message', 'Message Send Successfully.');
    }

    public function consultant(Request $request)
    {

        Mail::send('emails.consultmail',[
        'name' => $request->name,
        'email' => $request->email,
        'course' => $request->course,
        'phone' => $request->phone,
        'hululu' => $request->message,
        ], function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
            $mail->to("dmsuttara1@gmail.com")->subject('Consult Message');

        });

        Consult::create([
        'name' => $request->name,
        'email' => $request->email,
        'course' => $request->course,
        'phone' => $request->phone,
        'status' => "unseen",
        'message' => $request->message,
        ]);
        
        $email_data = [
            'recipient' => 'dmsrubel97@gmail.com',
            'fromEmail' => $request->email,
            'fromName' => $request->name,
            'subject' => $request->course,
            'body' => $request->message,
        ];
        
        Mail::send('admin.email',$email_data, function ($message) use ($email_data){
            $message->to($email_data['recipient'])
                ->from($email_data['fromEmail'], $email_data['fromName'])
                ->subject($email_data['subject']);
        });

        return redirect()->back()->with('message', 'Message Send Successfully.');

    }

    public function registration(Request $request)
    {
        Registration::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'event_title' => $request->title,
            'event_category' => $request->category,
        ]);
        return redirect()->back()->with('message', 'Registration completed');
    }

    public function registernow($id)
    {
        $batch=Batch::where('slug', $id)->first();
        $course= Course::where('id',$batch->course_id)->first();
        return view('admission', compact('batch','course'));
    }

    public function registerseminar($slug)
    {
        $event=Event::where('slug', $slug)->first();
        return view('seminar-register', compact('event'));
    }


    public function checking()
    {
        return view('checking.checking');
    }

    public function design1($id)
    {
        $courses=Course::paginate(3);
        $design1=Design1::find($id)->first();
        return view('design1',compact('design1','courses'));
    }

    public function design2($id)
    {

        $design2=Design2::find($id);
        return view('design2',compact('design2'));
    }

    public function addcomment(Request $request)
    {
//        dd($request->all());
        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'status' => "pending",
            'blog_id' => $request->blog_slug,

        ]);
        return redirect()->back()->with('comment', 'Comment Submited');
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

    public function footerAddress(Request $request, $id){
        $contact = Contact::find($id);
        $contact->update([
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect()->back();
    }

    public function footerWhatsApp(Request $request,$id){
        $contact = Contact::find($id);
        $contact->update([
            'phone' => $request->phone,
        ]);

        return redirect()->back();
    }



}
