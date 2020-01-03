<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth', ['except' => [
			'create',
			'store',
			'show'
		]]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$contacts = Contact::all();
		return view('contacts.index', compact('contacts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('contacts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required',
			'subject' => 'required',
			'message' => 'required|min:10'
		]);

		$contact = (new Contact)->create([
			'name' => $request->name,
			'email' => $request->email,
			'subject' => $request->subject,
			'message' => $request->message,
		]);

		return redirect('contacts/'.$contact->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function show(Contact $contact)
	{
		return view('contacts.show', compact('contact'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Contact $contact)
	{
		return view('contacts.edit', compact('contact'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Contact $contact)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required',
			'subject' => 'required',
			'message' => 'required|min:10'
		]);

		$contact->update([
			'name' => $request->name,
			'email' => $request->email,
			'subject' => $request->subject,
			'message' => $request->message
		]);

		return redirect('contacts/'.$contact->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Contact $contact)
	{
		$contact->delete();
		return redirect('contacts');
	}
}
