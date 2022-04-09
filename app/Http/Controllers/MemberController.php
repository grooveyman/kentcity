<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Region;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    function list($id=null){
        return  $id? Member::find($id) : Member::all();
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.home');
    }

    public function view(){
        $members = Member::paginate(10);
        $members_count = Member::all()->count();
        return view('pages.view',['members' => $members, 'members_count' => $members_count]);

    }

     public function action(Request $request){
        

        $members = Member::where('surname', 'LIKE', '%' . $request->get('inpQuery') . '%' )
                ->orWhere('firstname', 'LIKE', '%' . $request->get('inpQuery') . '%' )
                ->orWhere('othernames', 'LIKE', '%' . $request->get('inpQuery') . '%')->orderBy('id','desc')->get();
        return json_encode( $members );
        
    }

    public function updateList($id){
        $member = Member::where('id', $id)->with('region')->first();
        return view('pages.edit.updateList', ['member' => $member]);
    }

    public function showProfile(){

        $members_count = Member::all()->count();
        $members = Member::paginate(6);
        
        return view('pages.profile', ['members' => $members, 'members_count' => $members_count]);
    }

     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // $this->validate($request, [

        // ]);

        if($request->byear == '1920' and $request->bday == '1'){
            return redirect('/')->with('fail', 'Please select your birthdate');
        }


        $bday = $request->bday;
        $bmonth = $request->bmonth;
        $byear = $request->byear;

        $bdayFinal = $bday . '/' . $bmonth .'/'. $byear;

        $member = new Member;
        $member->surname = $request->surname;
        $member->firstname = $request->firstname;
        $member->othernames = $request->oname;
        $member->gender = $request->gender;
        $member->birthday = $bdayFinal;
        $member->save();

        // $fname = strtoupper($request->firstname);

        $members = Member::where('surname', '=', $request->surname)->where('firstname', '=', $request->firstname)->first();
        return view('pages.location', ['members'=> $members]);
    }

    public function twoShow(){
        return view('pages.location');
    }

    public function addLocation(Request $request, $id){
        $member = Member::where('id', $id)->first();
        $member->hometown = $request->home_name;
        $member->region_id = $request->home_region;
        $member->residence = $request->residence;
        $member->contact = $request->phone;
        $member->marital_status = $request->marital;
        $member->spouse_name = $request->spouse_name;
        $member->save();

        $members = Member::where('id', $id)->first();
        return view('pages.education', ['members' => $members]);



    }

    public function addEducation(Request $request, $id){
        $member = Member::where('id', $id)->first();
        $member->edu_level = $request->education_level;
        $member->other_edu_level = $request->other_education;
        $member->profession = $request->profession;

        $member->father_name = $request->father_name;

        if($request->father_status == ""){
            $member->father_status = '1';
        }else{
            $member->father_status = '0';
        }
        
        $member->father_contact = $request->father_phone;

        if($request->mother_status == ""){
            $member->mother_status = '1';
        }else{
            $member->mother_status ='0';
        }

        $member->mother_name = $request->mother_name;
        $member->mother_contact = $request->mother_phone; 

        $member->save();

        $members = Member::where('id', $id)->first();
        return view('pages.baptism', ['members' => $members]);
    }

    public function addBaptism(Request $request, $id){
        $member = Member::where('id', $id)->first();
        $member->place_of_baptism = $request->bap_place;
        $member->method_of_baptism = $request->method_bap;
        $member->other_method = $request->other_bap;
        
        if($member->role_id == ""){
            $member->role_id = 8;
        }else{
            $member->role_id = $request->role;
        }
        
        $member->other_role = $request->other_role;
        $member->save();

         $members = Member::where('id', $id)->first();
        return view('pages.picture', ['members' => $members]);
    }

    public function addPicture(Request $request, $id){
        $member = Member::where('id', $id)->first();


        $image = $request->file('inpFile');
        $name = sha1(date('YmdHis')). '.' .$image->getClientOriginalExtension();
        $destination_path = public_path('/storage/imagesProfile');
        $imagePath = $destination_path. "/". $name;
        $image->move($destination_path, $name);

        $member->pic = $name;
        $member->save();

        $members = Member::where('id', $id)->with('region','role')->first();

        return view('pages.details', ['members' => $members]);

    }

    public function finish(){
        return view('pages.finish');
    }

    public function details(){
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member, $id)
    {
        //
        $members = Member::where('id', $id)->first();
        return view('pages.edit.home',['members' => $members]);


    }

     public function editOne(Member $member, $id)
    {
        //
        $members = Member::where('id', $id)->first();
        return view('pages.edit.location',['members' => $members]);


    }

public function editTwo(Member $member, $id)
    {
        //
        $members = Member::where('id', $id)->first();
        return view('pages.edit.education',['members' => $members]);


    }

    public function editThree(Member $member, $id)
    {
        //
        $members = Member::where('id', $id)->first();
        return view('pages.edit.education',['members' => $members]);


    }

    //     public function editThree(Member $member, $id)
    // {
    //     //
    //     $members = Member::where('id', $id)->first();
    //     return view('pages.edit.baptism',['members' => $members]);


    // }

    public function addEditOne(Request $request, $id){

        if($request->byear == '1920' and $request->bday == '1'){
            return redirect('/')->with('fail', 'Please select your birthdate');
        }

          $bday = $request->bday;
        $bmonth = $request->bmonth;
        $byear = $request->byear;

        $bdayFinal = $bday . '/' . $bmonth .'/'. $byear;
        $member = Member::where('id', $id)->first();
        $member->surname = $request->surname;
        $member->firstname = $request->firstname;
        $member->othernames = $request->oname;
        $member->gender = $request->gender;
        $member->birthday = $bdayFinal;
        $member->save();

        $members = Member::where('id', $id)->first();
        return view('pages.edit.viewEdit', ['member'=> $member]);
    }

    public function editBioInfo($id){
        $member = Member::where('id',$id)->first();
        return view('pages.edit.home2', ['member'=> $member]);
    }

    public function editLocation(Request $request, $id){
        $member = Member::where('id', $id)->first();
        $member->hometown = $request->home_name;
        $member->region_id = $request->home_region;
        $member->residence = $request->residence;
        $member->contact = $request->phone;
        $member->marital_status = $request->marital;
        $member->spouse_name = $request->spouse_name;
        $member->save();

        $member = Member::where('id', $id)->first();
        return view('pages.edit.viewEdit', ['member' => $member]);

    }

    public function editEducation(Request $request, $id){
        $member = Member::where('id', $id)->first();
        $member->edu_level = $request->education_level;
        $member->other_edu_level = $request->other_education;
        $member->profession = $request->profession;

        $member->father_name = $request->father_name;

        if($request->father_status == ""){
            $member->father_status = '1';
        }else{
            $member->father_status = '0';
        }
        
        $member->father_contact = $request->father_phone;

        if($request->mother_status == ""){
            $member->mother_status = '1';
        }else{
            $member->mother_status ='0';
        }

        $member->mother_name = $request->mother_name;
        $member->mother_status = $request->mother_status;
        $member->mother_contact = $request->mother_phone; 

        $member->save();

        $members = Member::where('id', $id)->first();
        return view('pages.edit.viewEdit', ['member' => $member]);
    }


    public function editBaptism(Request $request, $id){
         $member = Member::where('id', $id)->first();
        $member->place_of_baptism = $request->bap_place;
        $member->method_of_baptism = $request->method_bap;
        $member->other_method = $request->other_bap;

         if($member->role_id == ""){
            $member->role_id = 8;
        }else{
            $member->role_id = $request->role;
        }
        
        $member->other_role = $request->other_role;
        // $member->role_id = $request->role;
        // $member->other_role = $request->other_role;
        $member->save();

         $members = Member::where('id', $id)->first();
        return view('pages.edit.picture', ['members' => $members]);
    }

    public function editPicture(Request $request, $id){
        $member = Member::where('id', $id)->first();


        $image = $request->file('inpFile');
        $name = sha1(date('YmdHis')). '.' .$image->getClientOriginalExtension();
        $destination_path = public_path('/storage/imagesProfile');
        $imagePath = $destination_path. "/". $name;
        $image->move($destination_path, $name);

        $member->pic = $name;
        $member->save();

        $members = Member::where('id', $id)->with('region','role')->first();

        return view('pages.details', ['members' => $members]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }



    //view edit functions

    public function showCategoryEdit($id){
        $member = Member::where('id',$id)->with('region', 'role')->first();
        return view('pages.edit.viewEdit', ['member'=> $member]);
    }
}
