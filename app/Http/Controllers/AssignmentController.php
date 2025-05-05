<?php
namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
{
    // Show all assignments
    public function index()
    {
        $assignments = Assignment::all();
        return view('assignments.index', compact('assignments'));
    }

    // Show the form to create a new assignment
    public function create()
    {
        $courses = Course::all(); // Get all courses
        $teachers = Teacher::all(); // Get all teachers
        return view('assignments.create', compact('courses', 'teachers'));
    }

    // Store a newly created assignment
    public function store(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'teacher' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'file' => 'nullable|mimes:pdf,doc,docx|max:2048',
        ]);

        $assignment = new Assignment();
        $assignment->course = $request->course;
        $assignment->teacher = $request->teacher;
        $assignment->title = $request->title;
        $assignment->description = $request->description;
        $assignment->due_date = $request->due_date;

        // Handle file upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('assignments');
            $assignment->file_path = $filePath;
        }

        $assignment->save();

        return redirect()->route('assignments.index')->with('success', 'Assignment created successfully!');
    }

    // Show the form to edit an existing assignment
    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('assignments.edit', compact('assignment', 'courses', 'teachers'));
    }

    // Update an assignment
    public function update(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'course' => 'required',
            'teacher' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'file' => 'nullable|mimes:pdf,doc,docx|max:2048',  // Validate file upload if provided
        ]);
    
        // Find the assignment by ID
        $assignment = Assignment::findOrFail($id);
    
        // Update the assignment details
        $assignment->course = $request->course;
        $assignment->teacher = $request->teacher;
        $assignment->title = $request->title;
        $assignment->description = $request->description;
        $assignment->due_date = $request->due_date;
    
        // Handle file upload if a new file is provided
        if ($request->hasFile('file')) {
            // Delete the old file if it exists
            if ($assignment->file_path) {
                Storage::delete($assignment->file_path);
            }
            
            // Store the new file and update the file path
            $filePath = $request->file('file')->store('assignments');
            $assignment->file_path = $filePath;
        }
    
        // Save the updated assignment
        $assignment->save();
    
        // Redirect back to the assignment list with a success message
        return redirect()->route('assignments.index')->with('success', 'Assignment updated successfully!');
    }
    

    // Show details of an assignment
    public function show($id)
    {
        // Find the assignment by ID
        $assignment = Assignment::findOrFail($id);
    
        // Return the view with the assignment data
        return view('assignments.show', compact('assignment'));
    }
    

    // Delete an assignment
    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->delete();

        return redirect()->route('assignments.index')->with('success', 'Assignment deleted successfully!');
    }
}
