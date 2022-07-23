<?php

namespace App\Http\Livewire;

use App\Models\IfmSupervision;
use App\Models\Student;
use App\Models\Supervisor;
use Livewire\Component;

class SingleSupervisor extends Component
{
    public $details;
    public $supervision;
    public $unSupervised;

    public $selected = [];

    public function assign()
    {
        $supervisor = session()->get('supervisor')['id'];
        $faculty = session()->get('user')['faculty_id'];
        for ($i = 0; $i < count($this->selected); $i++) {
            IfmSupervision::create([
                'supervisor_id' => $supervisor,
                'student_id' => $this->selected[$i],
                'faculty_id' => $faculty
            ]);
            Student::where(['id'=>$this->selected[$i]])->update([
                'status' => "supervised",
            ]);
        }

        $this->selected = [];

        session()->flash('assigned', '');
        return redirect('/single/'.$supervisor);
    }

    // mount the data of super visor in his profile here
    public function mount($id)
    {
        $hod_faculty = session()->get('user')['faculty_id'];


        $this->details = Supervisor::find($id);

        request()->session()->put('supervisor', $this->details);

        $this->supervision = IfmSupervision::where('supervisor_id', $id)->get();

        $this->unSupervised = Student::where(['status'=>'active','faculty_id'=>$hod_faculty])->get();
    }

    public function render()
    {
        return view('livewire.single-supervisor');
    }
}
