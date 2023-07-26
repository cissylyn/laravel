<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function registerMember(Request $request){
        $memba = $request->$request->validate([
            'memberId'=> 'required',
            'username'=> 'required',
            'password'=> 'required',
            'email_address'=> 'required',
            'mobile_number'=> 'required'

        ]);
        $memba['memberId']=strip_tags($memba['memberId']);
        $memba['username']=strip_tags($memba['username']);
        $memba['password']=strip_tags($memba['password']);
        $memba['email_address']=strip_tags($memba['email_address']);
        $memba['mobile_number']=strip_tags($memba['mobile_number']);
        Member::create($memba);
        return 'member registered successfully';


    }


    public function index()
    {
        $members=Member::all();
        	return view('Admin.Members.indexx', ['members'=>$members]); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Members.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'memberId' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'email_address' => 'required|email|unique:members',
            'mobile_number' => 'required|string|max:20',
            // Add other validation rules for your form fields
        ]);

        // Create a new Member instance and set its attributes
        $member = new Member();
        $member->memberId = $validatedData['memberId'];
        $member->username = $validatedData['username'];
        $member->password = $validatedData['password'];
         // Hash the password for security $member->password = bcrypt($validatedData['password']); 
        $member->email_address = $validatedData['email_address'];
        $member->mobile_number = $validatedData['mobile_number'];
        // Set other attributes as needed

        // Save the new member to the database
        $member->save();

        // Redirect to the members list or any other page as needed
        return redirect()->route('members.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
