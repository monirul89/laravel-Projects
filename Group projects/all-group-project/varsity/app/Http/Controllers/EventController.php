<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Image;

class EventController extends Controller
{
    public function index(){
        return view('admin.events.add-event');
    }
    public function manageEvent(){
        $events = Event::all();
        return view('admin.events.manage-event',['events'=>$events]);
    }

    public function saveEvent(Request $request){
        $this->Validate($request, [
            'event_name'=>'required',
            'event_date'=>'required',
            'event_time'=>'required',
            'event_location'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'event_image'=>'required'
        ]);

        $eventImage = $request->file('event_image');
        $imageName = $eventImage->getClientOriginalName();
        $directory = 'event-images/';
        $imageURL = $directory.$imageName;
        Image::make($eventImage)->save($imageURL);

        $event = new Event();
        $event->event_name = $request->event_name;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        $event->event_location = $request->event_location;
        $event->short_description = $request->short_description;
        $event->long_description = $request->long_description;
        $event->event_image = $imageURL;
        $event->publication_status = $request->publication_status;
        $event->save();
        return redirect('/event-info/add-event')->with('message', 'Event info saved successfully');

    }
    public function unpublishedEvent($id){
        $event = Event::find($id);
        $event->publication_status=0;
        $event->save();
        return redirect('/event-info/manage-event')->with('message', 'Event info unpublished');
    }
    public function publishedEvent($id){
        $event = Event::find($id);
        $event->publication_status=1;
        $event->save();
        return redirect('/event-info/manage-event')->with('message', 'Event info published');
    }
    public function deleteEvent($id){
        $event = Event::find($id);
        $event->delete();
        return redirect('/event-info/manage-event')->with('message', 'Event info deleted');
    }
    public function viewEvent($id){
        $event = Event::find($id);
        return view('admin.events.view-event', ['event'=>$event]);
    }
    public function editEvent($id){
        $event = Event::find($id);
        return view('admin.events.edit-event', ['event'=>$event]);
    }
    public function updateEvent(Request $request){
        if($request->event_image){
            $event = Event::find($request->event_id);
            unlink($event->event_image);

            $eventImage = $request->file('event_image');
            $imageName = $eventImage->getClientOriginalName();
            $directory = 'event-images/';
            $imageURL = $directory.$imageName;
            Image::make($eventImage)->save($imageURL);

            $event->event_name = $request->event_name;
            $event->event_date = $request->event_date;
            $event->event_time = $request->event_time;
            $event->event_location = $request->event_location;
            $event->short_description = $request->short_description;
            $event->long_description = $request->long_description;
            $event->event_image = $imageURL;
            $event->publication_status = $request->publication_status;
            $event->save();
            return redirect('/event-info/manage-event')->with('message', 'Event info updated');
        }else{
            $event = Event::find($request->event_id);
            $event->event_name = $request->event_name;
            $event->event_date = $request->event_date;
            $event->event_time = $request->event_time;
            $event->event_location = $request->event_location;
            $event->short_description = $request->short_description;
            $event->long_description = $request->long_description;
            $event->publication_status = $request->publication_status;
            $event->save();
            return redirect('/event-info/manage-event')->with('message', 'Event info updated');
        }
    }
}
